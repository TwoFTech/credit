@extends('front/layouts/master')
@section('content')


<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Services</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.pages.index') }}">Acceuil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- start services.html section -->
<section class="featured-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>Prêts pour la vie</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/icon-1.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>Prêt personnel</h4>
                        <p>Financement flexible pour projets personnels et dépenses imprévues, rapide</p>
                        <a href="{{ route('detailpersonnel') }}">Lire la suite <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/car.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>Prêt auto</h4>
                        <p>Aide financière pour acheter ou louer un véhicule, abordable.</p>
                        <a href="{{ route('detailauto') }}">Lire la suite <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/home.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>Prêt aux entreprises</h4>
                        <p> Soutien financier pour démarrer ou développer une entreprise, essentiel.

                        </p>
                        <a href="{{ route('detailentreprises') }}">Lire la suite <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/education.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>Prêt immobilier</h4>
                        <p> Financement pour acquérir un bien immobilier, généralement à long terme.</p>
                        <a href="{{ route('detailimobilier') }}">Lire la suite <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/money.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>Prêt d’études</h4>
                        <p>Aide financière pour couvrir les frais de scolarité et matériel éducatif</p>
                        <a href="{{ route('detailetude') }}">Lire la suite <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/card.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>
                            Prêt sur salaire</h4>
                        <p> Prêt temporaire basé sur le salaire, remboursement rapide exigé</p>
                        <a href="{{ route('detailsalaire') }}">Lire la suite <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of services section -->
<!-- start loan options checking section -->
<section class="loan-options-checking">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 checkingbg1 text-center">
                <div class="single-loan-checking-options">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/edom.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>Pas de frais cachés</h4>
                        <p> A lettres bas opposées à l’utilisation du contenu ici
                         <br> anglais beaucoup de bureau</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 checkingbg2 text-center">
                <div class="single-loan-checking-options">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/document.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>Moins de documents</h4>
                        <p>A lettres bas opposées à l’utilisation du contenu ici

                            <br>  anglais beaucoup de bureau.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 checkingbg3 text-center">
                <div class="single-loan-checking-options">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/bripcase.png') }}" alt="">
                    </div>
                    <div class="content">
                        <h4>Équipe de spécialistes</h4>
                        <p>A lettres bas opposées à l’utilisation du contenu ici
                            <br> anglais beaucoup de bureau.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of loan options checking section -->
<!-- start simple loan process -->
<section class="second-loan-process section-padding" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>Processus de prêt simple</h2>
                </div>
            </div>
        </div>
        <div class="row process-list" >
            <div class="col-md-3 second-process" >
                <div class="second-single-loan-process" >
                    <h4>Choisissez le montant</h4>
                    <div class="icon" >
                        <img src="{{ asset('storage/front/asset/img/pade.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 second-process">
                <div class="second-single-loan-process">
                    <h4>Fournir le document</h4>
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/dollar.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 second-process">
                <div class="second-single-loan-process">
                    <h4>Prêt approuvé</h4>
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/handshake.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-3 second-process">
                <div class="second-single-loan-process">
                    <h4>Obtenez votre argent</h4>
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/get-money.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of simple loan process -->
<!-- start dream quote -->
<section class="dream-quote section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="dream-quote-text">

                    <h2>Faites de n’importe quel rêve une réalité avec l’un

<br> de nos plans de prêt</h2>
                    <a href="{{ route('services') }}" class="btn btn-default btn-sm">Nos services</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of dream quote -->
<!-- start customer faq -->
<section class="custom-faq section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>FAQ clients</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion" class="second-accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Quel est le montant du prêt qui est accordé ?
    </button>
  </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Le montant dépend de vos revenus et du type de prêt demandé, variant selon chaque institution financière.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Quel est le taux d'intérêt ?
    </button>
  </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Le taux d'intérêt varie généralement entre 5% et 12%, selon la durée et la nature du prêt demandé.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Comment les intérêts sont-ils calculés ?
    </button>
  </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Les intérêts sont généralement calculés mensuellement, sur la base du montant restant du prêt, via taux fixes ou variables.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="second-accordion" class="second-accordion">
                    <div class="card">
                        <div class="card-header" id="headingfour">
                            <h5 class="mb-0">
    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsfour" aria-expanded="false" aria-controls="collapsfour">
        Quel est le montant du prêt qui est accordé ?
    </button>
  </h5>
                        </div>
                        <div id="collapsfour" class="collapse" aria-labelledby="headingfour" data-parent="#second-accordion">
                            <div class="card-body">
                                Le montant accordé dépend de vos revenus, votre crédit et la politique du prêteur, généralement entre 1 000 € et 50 000 €
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfive">
                            <h5 class="mb-0">
    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsfive" aria-expanded="false" aria-controls="collapsfive">
        À quelles fins puis-je obtenir un prêt personnel ?
    </button>
  </h5>
                        </div>
                        <div id="collapsfive" class="collapse" aria-labelledby="headingfive" data-parent="#second-accordion">
                            <div class="card-body">
                                Le prêt personnel peut être utilisé pour financer des dépenses personnelles comme les vacances, rénovations, mariages, ou urgences médicales.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-six">
                            <h5 class="mb-0">
    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapssix" aria-expanded="false" aria-controls="collapssix">
        Comment puis-je rembourser le prêt personnel ?
    </button>
  </h5>
                        </div>
                        <div id="collapssix" class="collapse" aria-labelledby="heading-six" data-parent="#second-accordion">
                            <div class="card-body">
                                Le prêt peut être remboursé par des mensualités automatiques via votre compte bancaire, sur une période déterminée à l'avance.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-seven">
                            <h5 class="mb-0">
    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsseven" aria-expanded="false" aria-controls="collapsseven">
        Quelle garantie devrai-je fournir ?
    </button>
  </h5>
                        </div>
                        <div id="collapsseven" class="collapse" aria-labelledby="heading-seven" data-parent="#second-accordion">
                            <div class="card-body">
                                En général, les prêts personnels ne nécessitent pas de garantie, mais cela peut dépendre du prêteur et du montant emprunté.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="heading-eight">
                            <h5 class="mb-0">
    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseight" aria-expanded="false" aria-controls="collapseight">
        Puis-je bénéficier d’un avantage fiscal sur le prêt immobilier ?
    </button>
  </h5>
                        </div>
                        <div id="collapseight" class="collapse" aria-labelledby="heading-eight" data-parent="#second-accordion">
                            <div class="card-body">
                                Oui, les intérêts payés sur un prêt immobilier peuvent donner droit à des déductions fiscales, selon la législation en vigueur.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of customer faq -->


@endsection
