@extends('front.layouts.master')

@section('content')
<div class="container py-5">
    <h2>@lang('index.loan_status')</h2>

    @if($demandes->isEmpty())
        <p>@lang('index.no_requests')</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>@lang('index.amount')</th>
                    <th>@lang('index.monthly_repayment')</th>
                    <th>@lang('index.objective')</th>
                    <th>@lang('index.status')</th>
                    <th>@lang('index.submission_date')</th>
                </tr>
            </thead>
            <tbody>
                @foreach($demandes as $demande)
                <tr>
                    <td>{{ $demande->montant }} €</td>
                    <td>{{ $demande->remboursementmensuel }} €</td>
                    <td>{{ $demande->objectif }}</td>
                    <td>{{ ucfirst($demande->statut) }}</td>
                    <td>{{ $demande->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection

{{--
@extends('front.layouts.master')

@section('content')
<div class="container py-5">
    <h2 class="text-center" style="color: blue; font-weight: bold;">Suivi de ma demande de prêt</h2>

    <div class="card shadow-sm mb-5" style="border-radius: 10px; overflow: hidden;">
        <div class="card-body p-4">
            <!-- Infos sur la demande de prêt -->
            <h4 class="card-title" style="color: blue; font-weight: bold;">Montant demandé : {{ $demande->montant }} €</h4>
            <p><strong>Objectif du prêt : </strong> {{ $demande->objectif }}</p>
            <p><strong>Statut actuel de la demande : </strong> <span class="badge" style="background-color: blue; color: white;">{{ ucfirst($demande->statut) }}</span></p>
            <p><strong>Date de la demande : </strong> {{ $demande->created_at->format('d/m/Y') }}</p>

            <hr class="my-4">

            <!-- Historique des changements de statut -->
            <h4 style="color: blue;">Historique des changements de statut</h4>
            @if ($demande->historiques->isEmpty()) <!-- Changer de $demandes à $demande -->
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
                        @foreach ($demande->historiques as $historique) <!-- Changer de $demandes à $demande -->
                            <tr>
                                <td>{{ ucfirst($historique->ancien_statut) }}</td>
                                <td>{{ ucfirst($historique->nouveau_statut) }}</td>
                                <td>{{ \Carbon\Carbon::parse($historique->date_changement_statut)->format('d/m/Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>
@endsection --}}

