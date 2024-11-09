@extends('front/layouts/master')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>@lang('header.about')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.pages.index') }}">@lang('header.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('header.about')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="about-page-shortcode section-padding">
    <div class="container rowpadding-with-border">
        <div class="row">
            <div class="col-md-6">
                <div class="single-image">
                    <img src="{{ asset('storage/front/asset/img/about.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-content">
                    <h2>@lang('header.about_us')</h2>

                    <p>@lang('header.about_us_description') </p>
                    <p>
                       @lang('header.commitment') </p>

                    <img src="{{ asset('storage/front/asset/img/sign.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="single-vision">
                    <div class="vision-img">
                        <img src="{{ asset('storage/front/asset/img/vision-1.png') }}" alt="">
                    </div>
                    <div class="vision-content">
                        <h4>@lang('header.vision')</h4>
                        <p>
                            @lang('header.vision_description')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="single-vision">
                    <div class="vision-img">
                        <img src="{{ asset('storage/front/asset/img/vision-2.png') }}" alt="">
                    </div>
                    <div class="vision-content">
                        <h4>@lang('header.goals')</h4>
                        <p>@lang('header.goals_description')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of about section -->
<!-- start testimonial section -->
<section class="second-testimonial section-padding">
    <div class="container">
        <div class="second-testimonial-slider owl-carousel">
            <div class="second-single-testimonial">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="left-qoute">“</div>
                        <p>@lang('header.testimonial_message_1')</p>
                        <div class="testimonaol-info">
                            <h4>Dwayne Johnson</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="second-single-testimonial">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="left-qoute">“</div>
                        <p>@lang('header.testimonial_message_6')</p>
                        <div class="testimonaol-info">
                            <h4>Roky tom</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="second-single-testimonial">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="left-qoute">“</div>
                        <p>@lang('header.testimonial_message_5')</p>
                        <div class="testimonaol-info">
                            <h4>Karolayns D</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="second-single-testimonial">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="left-qoute">“</div>
                        <p>@lang('header.testimonial_message_4')</p>
                        <div class="testimonaol-info">
                            <h4>johon due</h4>

                        </div>
                    </div>
                </div>
            </div>
            <div class="second-single-testimonial">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="left-qoute">“</div>
                        <p>@lang('header.testimonial_message_3')</p>
                        <div class="testimonaol-info">
                            <h4>Mukib kukis</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end of testimonial section -->
<!-- start our partner section -->
<section class="our-partner section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

            </div>
        </div>
        <div class="brand-slider-two owl-carousel" style="background-color: blue">
            <div class="single-brand round-border">
                <img src="{{ asset('storage/front/asset/img/brand-6.png') }}" alt="">
            </div>
            <div class="single-brand round-border">
                <img src="{{ asset('storage/front/asset/img/brand-7.png') }}" alt="">
            </div>
            <div class="single-brand round-border">
                <img src="{{ asset('storage/front/asset/img/brand-8.png') }}" alt="">
            </div>
            <div class="single-brand round-border">
                <img src="{{ asset('storage/front/asset/img/brand-9.png') }}" alt="">
            </div>
            <div class="single-brand round-border">
                <img src="{{ asset('storage/front/asset/img/brand-10.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- end of our partner section -->

<!-- end of map section -->
<!-- start footer area -->
@endsection
