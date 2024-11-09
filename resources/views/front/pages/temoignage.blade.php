@extends('front/layouts/master')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>@lang('header.testimonials')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.pages.index') }}">@lang('header.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('header.testimonials')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- end of page header -->
<!-- start testimonial page -->
<section class="testimonial-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/prof1.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>Dwayne Johnson</h4>
                        <p>@lang('header.testimonial_message_1')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/testimonial-1.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>Stuart Binny</h4>
                        <p>@lang('header.testimonial_message_2')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/prof2.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>Mukib kukis</h4>
                        <p>@lang('header.testimonial_message_3')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/testimonial-2.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>johon due</h4>
                        <p>@lang('header.testimonial_message_4')</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/testimonial.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>Karolayns D</h4>
                        <p>@lang('header.testimonial_message_5')</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/prof3.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>Roky tom</h4>
                        <p>@lang('header.testimonial_message_6')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of testimonial page -->
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

@endsection
