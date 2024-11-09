@extends('front/layouts/master')

@section('content')
<style>
    .contact-section {
        padding: 50px 0;
    }
    .contact-info {
        margin-top: 30px;
    }
    .contact-info h4 {
        margin-bottom: 20px;
    }
</style>

<div class="container contact-section">
    <h2 class="text-center">@lang('header.contact_us')</h2>

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/front/asset/img/ceo.png') }}" alt="Contact Us" class="img-fluid">
        </div>

        <div class="col-md-6 contact-info">

            <p><strong>@lang('index.address') :</strong>3 Rue de la République, 75011 Paris, France</p>
            <p><strong>@lang('index.phone_number')</strong> <a href="+33 757755459"> +33 757755459 </a></p>
            <p><strong>@lang('index.email_address')</strong> <a href="mailto:courrier@pretshorizon.com">courrier@pretshorizon.com></a></p>

        </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
