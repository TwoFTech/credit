@extends('front/layouts/master')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Services</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Domicile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- end of page header -->

<!-- start services image page -->

<section class="services-image-page section-padding">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="single-services-image">
                <div class="services-thumb">
                    <a href="#"><img src="{{ asset('storage/front/asset/img/portfolio-11.jpg') }}" alt=""></a>
                </div>
                <div class="services-img-content">
                    <a href="#"><h4>Prêt Personnel</h4></a>
                    <p>Le prêt public n’est pas accordé avec des véhicules et des véhicules de transport de marchandises.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-services-image">
                <div class="services-thumb">
                    <a href="#"><img src="{{ asset('storage/front/asset/img/portfolio-10.jpg') }}" alt=""></a>
                </div>
                <div class="services-img-content">
                    <a href="car-loan.html"><h4>Prêt Auto</h4></a>
                    <p>Le prêt est le plus populaire pour les véhicules à tempérament et les véhicules les plus comparables.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-services-image">
                <div class="services-thumb">
                    <a href="#"><img src="{{ asset('storage/front/asset/img/portfolio-3.jpg') }}" alt=""></a>
                </div>
                <div class="services-img-content">
                    <a href="#"><h4>Prêt aux Entreprises</h4></a>
                    <p>Vous avez obtenu un prêt pour une nouvelle entreprise afin d’agrandir votre entreprise et de développer vos véhicules spécialisés.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-services-image">
                <div class="services-thumb">
                    <a href="#"><img src="{{ asset('storage/front/asset/img/portfolio-4.jpg') }}" alt=""></a>
                </div>
                <div class="services-img-content">
                    <a href="#"><h4>Prêt Immobilier</h4></a>
                    <p>Nous pouvons vous aider à vous adapter à vos besoins et à votre budget avec la force que vous avez avec la force pour répondre à vos besoins et à votre budget.</p>
                    <a href="#">Lire la suite</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-services-image">
                <div class="services-thumb">
                    <a href="#"><img src="{{ asset('storage/front/asset/img/portfolio-5.jpg') }}" alt=""></a>
                </div>
                <div class="services-img-content">
                    <a href="#"><h4>Prêt d'étude</h4></a>
                    <p>
                        Le prêt d'étude permet de couvrir les frais de scolarité, livres et autres dépenses éducatives</p>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="single-services-image">
                <div class="services-thumb">
                    <a href="#"><img src="{{ asset('storage/front/asset/img/portfolio-6.jpg') }}" alt=""></a>
                </div>
                <div class="services-img-content">
                    <a href="#"><h4>Prêt sur Salaire</h4></a>
                    <p>Prêt sur Salaire : options de financement automobile flexibles pour les voitures neuves ou d’occasion et les véhicules spécialisés</p>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- end of services image -->




@endsection
