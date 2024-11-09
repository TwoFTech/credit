@extends('front/layouts/master')
@section('content')

<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>@lang('header.request_loan')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('front.pages.index') }}">@lang('header.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('header.request_loan')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<div class="contact-us py-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="color: blue">
                <h2 class="mb-4 fw-bold text-dark">@lang('header.funding_request')</h2>
                <p class="pb-4 text-muted">@lang('header.funding_disclaimer')</p>
                <div class="form-wrapper bg-light p-5 shadow-sm rounded">
                    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

{{-- Affichage des erreurs de validation --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <form method="POST" action="{{ route('demandepret.store') }}" id="formDemande">
                        @csrf
                        <h3 class="fw-bold mb-3" >@lang('index.personal_information')</h3>
                        <div class="row">
                            <!-- Nom complet -->
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label">@lang('index.full_name')</label>
                                <input type="text" name="nom" id="nom" class="form-control" placeholder="Votre nom" required>
                            </div>
                            <!-- Téléphone -->
                            <div class="col-md-6 mb-3">
                                <label for="telephone" class="form-label">@lang('index.phone_number')</label>
                                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Votre téléphone" required>
                            </div>
                            <!-- Pays de résidence -->
                            <div class="col-md-6 mb-3">
                                <label for="pays" class="form-label">@lang('index.country_of_residence')</label>
                                <input type="text" name="pays" id="pays" class="form-control" placeholder="Votre pays" required>
                            </div>
                            <!-- Ville et code postal -->
                            <div class="col-md-6 mb-3">
                                <label for="ville" class="form-label">@lang('index.city_postal_code')</label>
                                <input type="text" name="ville" id="ville" class="form-control" placeholder="Votre ville" required>
                            </div>
                            <div class="col-md-12">
                                <label for="sexe" class="form-label">@lang('index.gender')</label>
                                <div class="single-get-check">
                                    <!-- Option Masculin -->
                                    <label class="radiobox"> @lang('index.male')
                                        <input type="radio" name="sexe" value="masculin" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <!-- Option Féminin -->
                                    <label class="radiobox"> @lang('index.female')
                                        <input type="radio" name="sexe" value="feminin">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label for="email1" class="form-label">@lang('index.email_address')</label>
                                <input type="email" name="email1" id="email1" class="form-control" placeholder="Votre e-mail" required>
                            </div>
                            <!-- Confirmation email -->
                            <div class="col-md-6 mb-3">
                                <label for="email2" class="form-label">@lang('index.confirm_email')</label>
                                <input type="email" name="email2" id="email2" class="form-control" placeholder="Confirmez votre e-mail" required>
                            </div>
                        </div>

                        <h3 class="fw-bold mt-4 mb-3" style="color: blue">@lang('index.loan_details')</h3>
                        <div class="row">
                            <!-- Montant du prêt demandé -->
                            <div class="col-md-6 mb-3">
                                <label for="montant" class="form-label">@lang('index.requested_loan_amount')</label>
                                <input type="number" name="montant" id="montant" class="form-control" min="1" placeholder="Montant" required>
                            </div>
                            <!-- Remboursement mensuel souhaité -->
                            <div class="col-md-6 mb-3">
                                <label for="remboursementmensuel" class="form-label">@lang('index.desired_monthly_repayment')</label>
                                <input type="number" name="remboursementmensuel" id="remboursementmensuel" class="form-control" min="1" placeholder="Montant" required>
                            </div>
                            <!-- Type de prêt -->
                            <div class="col-md-12 mb-3">
                                <label for="typepret_id" class="form-label">@lang('index.loan_type')</label>
                                <select id="typepret_id" name="typepret_id" class="form-control" required>
                                    @foreach($typeprets as $typepret)
                                        <option value="{{ $typepret->id }}">{{ $typepret->nompret }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Objectif du prêt -->
                            <div class="col-md-12 mb-3">
                                <label for="objectif" class="form-label">@lang('index.loan_purpose')</label>
                                <input type="text" name="objectif" id="objectif" class="form-control" placeholder="Objectif" required>
                            </div>
                        </div>

                        <h3 class="fw-bold mt-4 mb-3" style="color: blue">@lang('index.civil_information')</h3>
                        <div class="row">
                            <!-- Statut professionnel -->
                            <div class="col-md-6 mb-3">
                                <label for="statut_professionnel" class="form-label">@lang('index.professional_status')</label>
                                <input type="text" name="statut_professionnel" id="statut_professionnel" class="form-control" placeholder="Statut professionnel" required>
                            </div>
                            <!-- Nom de l'employeur -->
                            <div class="col-md-6 mb-3">
                                <label for="nom_employeur" class="form-label">@lang('index.employer_name')</label>
                                <input type="text" name="nom_employeur" id="nom_employeur" class="form-control" placeholder="Employeur" required>
                            </div>
                            <!-- Revenu mensuel -->
                            <div class="col-md-6 mb-3">
                                <label for="revenu_mensuel" class="form-label">@lang('index.current_monthly_income')</label>
                                <input type="number" name="revenu_mensuel" id="revenu_mensuel" class="form-control" min="1" placeholder="Revenu mensuel" required>
                            </div>
                            <!-- Nom de la banque -->
                            <div class="col-md-6 mb-3">
                                <label for="nom_banque" class="form-label">@lang('index.bank_name')</label>
                                <input type="text" name="nom_banque" id="nom_banque" class="form-control" placeholder="Banque" required>
                            </div>
                        </div>

                        <h3 class="fw-bold mt-4 mb-3" style="color: blue">@lang('index.create_account')</h3>
                        <div class="row">
                            <!-- Identifiant -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">@lang('index.create_identifier')</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="nana@gmail.com" required>
                            </div>
                            <!-- Mot de passe -->
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">@lang('index.password')</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe" required>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success w-100 py-2 fw-bold"; style="background-color: blue;">@lang('index.submit_loan_request')</button>
                        </div>

                        <!-- Message d'alerte -->
                        <div id="alertBox2" class="alert alert-danger mt-3" style="display: none;">
                            @lang('index.check_information')
                        </div>
                    </form>

                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="p-4 bg-white shadow-sm rounded">
                    <h3 class="fw-bold" style="color: blue">@lang('header.contact_us')</h3>

                    <div>
                        <h5><i class="fas fa-building" style="color: #FFBD59"></i>@lang('index.address')</h5>
                        <p>3 Rue de la République, 75011 Paris, France</p>
                    </div>
                    <div>
                        <h5><i class="fas fa-envelope" style="color: #FFBD59"></i> @lang('header.contact_email')</h5>
                        <p> <a href="mailtro:courrier@pretshorizon.com">courrier@pretshorizon.com </a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
