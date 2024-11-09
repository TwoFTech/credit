<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\NouvelleDemandeMail;
use App\Models\Demandepret;
use App\Models\Historique;
use App\Models\Typepret;
use App\Models\User;
use App\Notifications\NouvelleDemandeNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Pour Auth
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class DemandepretController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Récupérer toutes les demandes de prêt
    $demandes = Demandepret::with('user')->get(); // Assurez-vous que la relation 'user' est définie dans le modèle Demandepret

    return view('dashboard.pages.demandes.index', compact('demandes'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Récupérer tous les types de prêts
        $typeprets = Typepret::all();

        return view('front/pages/demandepret', compact('typeprets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       // dd($request->all());
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'telephone' => 'required|string|regex:/^\+?[0-9\s\-()]+$/|max:20',
            'pays' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'email1' => 'required|email|unique:users,email|max:255',
            'email2' => 'required|email|max:255|same:email1',
            'montant' => 'required|numeric|min:1',
            'remboursementmensuel' => 'required|numeric|min:1',
            'typepret_id' => 'required|exists:typeprets,id',
            'objectif' => 'required|string|max:255',
            'statut_professionnel' => 'required|string|max:255',
            'nom_employeur' => 'required|string|max:255',
            'revenu_mensuel' => 'required|numeric|min:1',
            'nom_banque' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Création du compte utilisateur
        $user = new User();
        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->sexe = $request->input('sexe');
        $user->telephone = $request->telephone;
        $user->pays = $request->pays;
        $user->ville = $request->ville;
        $user->password = Hash::make($request->password);
        $user->save();

        // Création de la demande de prêt
        $demandePret = new Demandepret();
        $demandePret->montant = $request->montant;
        $demandePret->remboursementmensuel = $request->remboursementmensuel;
        $demandePret->objectif = $request->objectif;
        $demandePret->statut_professionnel = $request->statut_professionnel;
        $demandePret->nom_employeur = $request->nom_employeur;
        $demandePret->revenu_mensuel = $request->revenu_mensuel;
        $demandePret->nom_banque = $request->nom_banque;
        $demandePret->statut = 'en attente';
        $demandePret->user_id = $user->id;
        $demandePret->typepret_id = $request->typepret_id;
        $demandePret->save();

       // Mail::to('pretshorizon@gmail.com')->send(new AdminMail($demandePret));

        // Envoie la notification à l'admin
    $admins = User::where('role', 'admin')->get();
    Notification::send($admins, new NouvelleDemandeNotification($demandePret));

      // Envoi d'un email de confirmation au client
      Mail::to($user->email)->send(new NouvelleDemandeMail($demandePret));

        // Redirection avec message de succès
        return redirect()->back()->with('success', 'Votre demande de prêt a été envoyée avec succès.Nous vous contacterons dans les plus bref délais par e-mail,vous pouvez a présent suivre votre demande.Merci');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Récupérer la demande de prêt par son ID
        $demandePret = Demandepret::with('user', 'typepret')->findOrFail($id);

        // Retourner la vue avec les informations de la demande
        return view('dashboard.pages.demandes.show', compact('demandePret'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demandepret $demandepret)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demandepret $demandepret)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $demande = Demandepret::findOrFail($id);
        $demande->delete();

        return redirect()->route('demandes.index')->with('success', 'Demande supprimée avec succès.');
    }

    // public function mesDemandes($id)
    // {
    //     // Vérifier si l'utilisateur est connecté
    //     if (!auth()->check()) {
    //         return redirect()->route('login')->with('message', 'Veuillez vous connecter pour suivre votre demande.');
    //     }

    //     // Récupérer la demande de prêt correspondant à l'utilisateur connecté
    //     $demandes = Demandepret::where('id', $id)
    //                             ->where('user_id', auth()->id()) // Utilisez auth() en minuscule
    //                             ->with('historiques')
    //                             ->firstOrFail();

    //     // Retourner la vue avec les détails de la demande de prêt
    //     return view('front.pages.suivredemande', compact('demandes'));
    // }

    public function about()
    {
        return view('front.pages.about');
    }

    public function serviceimage()
    {
        return view('front.pages.serviceimage');
    }

    public function detailentreprises()
    {
        return view('front.pages.detailentreprises');
    }

    public function detailetude()
    {
        return view('front.pages.detailetude');
    }

    public function detailauto()
    {
        return view('front.pages.detailauto');
    }

    public function detailpersonnel()
    {
        return view('front.pages.detailpersonnel');
    }

    public function detailimobilier()
    {
        return view('front.pages.detailimobilier');
    }

    public function detailsalaire()
    {
        return view('front.pages.detailsalaire');
    }

    public function calculator()
    {
        return view('front.pages.calculator');
    }

    public function temoignage()
    {
        return view('front.pages.temoignage');
    }

    public function processus()
    {
        return view('front.pages.processus');
    }

    public function contact()
    {
        return view('front.pages.contact');
    }





    public function mesDemandes()
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Veuillez vous connecter pour suivre votre demande.');
        }


        $demandes = Auth::user()->demandes;

        return view('front.pages.suivredemande', compact('demandes'));
    }


    public function services(){
        return view('front.pages.services');
    }


    public function updateStatus(Request $request, $id)
    {
        // Récupérer la demande de prêt
        $demande = Demandepret::findOrFail($id);

        // Récupérer l'ancien statut
        $ancienStatut = $demande->statut;

        // Mettre à jour le statut de la demande de prêt
        $demande->statut = $request->nouveau_statut;
        $demande->save();

        // Enregistrer un historique
        Historique::create([
            'ancien_statut' => $ancienStatut,
            'nouveau_statut' => $request->nouveau_statut,
            'date_changement_statut' => now(),
            'demandepret_id' => $demande->id,
        ]);

        return redirect()->back()->with('success', 'Statut mis à jour avec succès et historique enregistré.');
    }


    public function updateStatut(Request $request, $id)
{
    $demandePret = Demandepret::findOrFail($id);

    // Récupérer l'ancien statut
    $ancienStatut = $demandePret->statut;

    // Mettre à jour le statut de la demande de prêt
    $demandePret->statut = $request->input('statut');
    $demandePret->save();

    // Créer un nouvel historique
    Historique::create([
        'ancien_statut' => $ancienStatut,
        'nouveau_statut' => $demandePret->statut,
        'date_changement_statut' => now(),
        'demandepret_id' => $demandePret->id,
    ]);

    return redirect()->back()->with('success', 'Le statut a été mis à jour avec succès.');
}

}
