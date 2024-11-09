@extends('dashboard.layouts.master')

@section('content')
<div class="container py-5" style="min-height: 80vh; padding-top: 150px;">
    <h2 class="text-center" style="margin-top: 100px; color: blue; font-weight: bold;">Détails de la demande de prêt</h2>

    <div class="card shadow-sm mb-5" style="border-radius: 10px; overflow: hidden;">
        <div class="card-body p-4">
            <!-- Infos demande de prêt -->
            <h4 class="card-title" style="color: blue; font-weight: bold;">Montant demandé : {{ $demandePret->montant }} €</h4>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Remboursement mensuel : </strong> {{ $demandePret->remboursementmensuel }} €</p>
                    <p><strong>Objectif du prêt : </strong> {{ $demandePret->objectif }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Statut professionnel : </strong> {{ $demandePret->statut_professionnel }}</p>
                    <p><strong>Nom de l'employeur : </strong> {{ $demandePret->nom_employeur }}</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Revenu mensuel : </strong> {{ $demandePret->revenu_mensuel }} €</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Banque : </strong> {{ $demandePret->nom_banque }}</p>
                </div>
            </div>

            <!-- Statut de la demande -->
            <p><strong>Statut de la demande : </strong>
                <span class="badge" style="background-color: blue; color: white;">{{ ucfirst($demandePret->statut) }}</span>
            </p>

            <p><strong>Date de la demande : </strong> {{ $demandePret->created_at->format('d/m/Y') }}</p>

            <hr class="my-4">

            <!-- Informations utilisateur -->
            <h4 style="color: blue;">Informations sur l'utilisateur</h4>
            <p><strong>Nom : </strong> {{ $demandePret->user->nom }}</p>
            <p><strong>Email : </strong> {{ $demandePret->user->email }}</p>
            <p><strong>Téléphone : </strong> {{ $demandePret->user->telephone }}</p>

            <hr class="my-4">

            <!-- Type de prêt -->
            <h4 style="color: blue;">Type de prêt demandé</h4>
            <p><strong>Type de prêt : </strong>{{ $demandePret->typepret ? $demandePret->typepret->nompret : 'Type de prêt non défini' }}</p>

            <hr class="my-4">

            <!-- Section pour l'historique des changements de statut -->
            <h4 style="color: blue;">Historique des changements de statut</h4>
            @if ($demandePret->historiques->isEmpty())
                <p>Aucun historique disponible pour cette demande de prêt.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Ancien Statut</th>
                            <th>Nouveau Statut</th>
                            <th>Date du changement</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($demandePret->historiques as $historique)
                            <tr>
                                <td>{{ ucfirst($historique->ancien_statut) }}</td>
                                <td>{{ ucfirst($historique->nouveau_statut) }}</td>
                                <td>{{ \Carbon\Carbon::parse($historique->date_changement_statut)->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

            <hr class="my-4">

            <!-- Formulaire de changement de statut -->
            <h4 style="color: blue;">Changer le statut de la demande</h4>
            <form action="{{ route('demandes.update_statut_demande', $demandePret->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="statut">Nouveau statut</label>
                    <select class="form-control" id="statut" name="statut">
                        <option value="en attente" {{ $demandePret->statut == 'en attente' ? 'selected' : '' }}>En attente</option>
                        <option value="approuvé" {{ $demandePret->statut == 'approuvé' ? 'selected' : '' }}>Approuvé</option>
                        <option value="rejeté" {{ $demandePret->statut == 'rejeté' ? 'selected' : '' }}>Rejeté</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Mettre à jour le statut</button>
            </form>
        </div>
    </div>
</div>
@endsection
