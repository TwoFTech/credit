@extends('dashboard.layouts.master')

@section('content')
<div class="container" style="min-height: 80vh; padding-top: 45px;">
    <h2 style="margin-top: 100px; color: blue; text-align: center;">Demandes de Prêt</h2> <!-- Centre le titre -->

    @if($demandes->isEmpty())
        <p style="text-align: center;">Aucune demande de prêt n'a été soumise.</p>
    @else
        <div class="table-responsive"> <!-- Pour un tableau responsive -->
            <table class="table table-striped table-bordered mb-5" style="width: 100%; max-width: 800px; margin: 0 auto;"> <!-- Centre le tableau -->
                <thead class="thead-light">
                    <tr>
                        <th>Montant</th>
                        <th>Nom de l'utilisateur</th>
                        <th>Statut</th>
                        <th>Date de soumission</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($demandes as $demande)
                        <tr>
                            <td>{{ $demande->montant }} €</td>
                            <td>
                                @if($demande->user)
                                    {{ $demande->user->nom }}
                                @else
                                    <span class="text-red-500">Utilisateur non trouvé</span>
                                @endif
                            </td>
                            <td>{{ ucfirst($demande->statut) }}</td>
                            <td>{{ $demande->created_at->format('d/m/Y') }}</td>
                            <td class="d-flex">
                                <!-- Bouton Voir -->
                                <a href="{{ route('demandes.show', $demande->id) }}" class="btn btn-primary mr-2" style="background-color: blue; border: none;">Voir</a>

                                <!-- Formulaire de suppression -->
                                <form action="{{ route('demandes.destroy', $demande->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette demande ?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="background-color: #FFBD59; border: none;">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
