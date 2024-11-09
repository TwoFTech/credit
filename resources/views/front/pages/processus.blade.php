@extends('front/layouts/master')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Comment ça marche</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.pages.index') }}">Domicile</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Comment ça marche</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- end of page header -->
<section class="how-it-work-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="how-it-work-img">
                    <img src="{{asset('storage/front/asset/img/how-it-work-1.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="how-it-work-content">
                    <h4>Remplissez un formulaire d’inscription sur notre site web
                    </h4>
                   <p>Faites une demande sur notre site Web et attendez une réponse par e-mail dans les 15 à 30 minutes suivant l’heure de la demande pendant les heures de bureau.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="how-it-work-section how-it-work-backgrond section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="how-it-work-content">
                    <h2>Deuxième étape</h2>
                    <h4>Fill in an application form on our website</h4>
                   <p>Make a request on our website and wait for response to e-mail within 15-30 minutes from the time of the request during business hours. Make a request on our website and wait for response to e-mail within 15-30 minutes from the time of the request during business hours.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="how-it-work-img">
                    <img src="{{asset('storage/front/asset/img/how-it-work.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-it-work-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="how-it-work-img">
                    <img src="{{asset('storage/front/asset/img/how-it-work-3.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="how-it-work-content">
                    <h2>Step Three</h2>
                    <h4>Fill in an application form on our website</h4>
                    <p>Make a request on our website and wait for response to e-mail within 15-30 minutes from the time of the request during business hours. Make a request on our website and wait for response to e-mail within 15-30 minutes from the time of the request during business hours.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-it-work-section how-it-work-backgrond section-padding">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <div class="how-it-work-content">
                    <h2>Step Four</h2>
                    <h4>Fill in an application form on our website</h4>
                    <p>Make a request on our website and wait for response to e-mail within 15-30 minutes from the time of the request during business hours. Make a request on our website and wait for response to e-mail within 15-30 minutes from the time of the request during business hours.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="how-it-work-img">
                    <img src="{{asset('storage/front/asset/img/how-it-work-4.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection
