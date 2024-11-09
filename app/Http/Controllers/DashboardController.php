<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $notifications = Auth::user()->unreadNotifications;

       return view('dashboard.pages.index');

        return view('dashboard.pages.index', compact('notifications'));
    }

    public function markNotificationsAsRead()
    {
        Auth::user()->unreadNotifications->markAsRead();

        return redirect()->back()->with('success', 'Toutes les notifications ont été marquées comme lues.');
    }


    public function editProfile()
    {
        $admin = Auth::user(); // Récupère les informations de l'admin connecté
        return view('dashboard/pages/profil/edit', compact('admin')); // Passe la variable $admin à la vue
    }

    public function showClients()
    {
        // Assure-toi que tu as un moyen d'identifier les utilisateurs comme clients
        // Par exemple, en utilisant un champ 'role' dans la table 'users'
        $clients = User::where('role', 'client')->get();

        return view('dashboard.pages.clients.show', ['clients' => $clients]);
    }

   

    public function destroyClient(User $client)
    {
        // Vérifie que l'utilisateur n'essaie pas de se supprimer lui-même
        if (Auth::id() === $client->id) {
            return redirect()->route('clients.show')->with('error', 'Vous ne pouvez pas vous supprimer vous-même.');
        }

        // Supprimer le client
        $client->delete();

        return redirect()->route('clients.show')->with('success', 'Client supprimé avec succès.');
    }



}
