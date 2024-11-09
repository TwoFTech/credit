<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DemandepretController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypepretController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;
use Mcamara\LaravelLocalization\LaravelLocalization;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;




Route::get('/', function () {
    return view('front.pages.index');
});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


Route::get('/dashboard/profil', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes pour le Dashboard (Admin)
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard/demandes', [DemandepretController::class, 'index'])->name('demandes.index');
    Route::get('/dashboard/demandes/{id}', [DemandepretController::class, 'show'])->name('demandes.show');
    Route::delete('/dashboard/demandes/{id}', [DemandepretController::class, 'destroy'])->name('demandes.destroy');
    Route::get('/pages/typeprets/create', [TypepretController::class, 'create'])->name('typeprets.create');
    Route::get('/pages/typeprets/index', [TypepretController::class, 'index'])->name('typeprets.index');
    Route::get('/pages/typeprets/edit/{typepret}', [TypepretController::class, 'edit'])->name('typeprets.edit');
    Route::post('/pages/typeprets/store', [TypepretController::class, 'store'])->name('typeprets.store');
    Route::delete('/pages/typeprets/destroy/{id}', [TypepretController::class, 'destroy'])->name('typeprets.destroy');
    Route::put('/pages/typeprets/update/{typepret}', [TypepretController::class, 'update'])->name('typeprets.update');
    Route::post('/dashboard/layouts/partials/header', [DashboardController::class, 'markNotificationsAsRead'])->name('header.markNotificationsAsRead');
    Route::put('/dashboard/demandes/{id}/update-statut', [DemandepretController::class, 'updateStatut'])->name('demandes.update_statut_demande');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/pages/clients/show', [DashboardController::class, 'showClients'])->name('clients.show');
    Route::delete('/pages/clients/{client}', [DashboardController::class, 'destroyClient'])->name('clients.destroy');


});


Route::get('/front/pages/index', function () {
    return view('front/pages/index');
})->middleware(['auth', 'verified'])->name('front');

    Route::get('/front', [FrontController::class, 'index'])->name('front.pages.index');
    Route::get('/pages/demandepret', [DemandepretController::class, 'create'])->name('demandepret.create');
    Route::post('/pages/demandepret/store', [DemandepretController::class, 'store'])->name('demandepret.store');


Route::get('/pages/services', [DemandepretController::class, 'services'])->name('services');
Route::get('/pages/serviceimage', [DemandepretController::class, 'serviceimage'])->name('serviceimage');
Route::get('/pages/detailentreprises', [DemandepretController::class, 'detailentreprises'])->name('detailentreprises');
Route::get('/pages/detailetude', [DemandepretController::class, 'detailetude'])->name('detailetude');
Route::get('/pages/detailauto', [DemandepretController::class, 'detailauto'])->name('detailauto');
Route::get('/pages/detailimobilier', [DemandepretController::class, 'detailimobilier'])->name('detailimobilier');
Route::get('/pages/detailpersonnel', [DemandepretController::class, 'detailpersonnel'])->name('detailpersonnel');
Route::get('/pages/detailsalaire', [DemandepretController::class, 'detailsalaire'])->name('detailsalaire');
Route::get('/pages/calculator', [DemandepretController::class, 'calculator'])->name('calculator');
Route::get('/pages/temoignage', [DemandepretController::class, 'temoignage'])->name('temoignage');
Route::get('/pages/processus', [DemandepretController::class, 'processus'])->name('processus');
Route::get('/pages/contact', [DemandepretController::class, 'contact'])->name('contact');
Route::get('/pages/about', [DemandepretController::class, 'about'])->name('about');



Route::get('locale/{lang}',[LocaleController::class,'setLocale']);


    Route::middleware('auth')->group(function () {

        // Autres routes nécessitant une authentification

        Route::get('/pages/suivredemande', [DemandepretController::class, 'mesDemandes'])->name('suivredemande.mesDemandes');
    });

    // Route pour l'authentification (déjà gérée par Breeze via auth.php)
    require __DIR__.'/auth.php';
