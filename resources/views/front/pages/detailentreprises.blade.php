@extends('front/layouts/master')
@section('content')

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>@lang('index.business_loan')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.pages.index') }}">@lang('header.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('index.business_loan')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- end of banner area -->
<section class="services-page section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9">
                <div class="services-details">
                    <div class="services-thumb-lg">
                        <img src="{{ asset('storage/front/asset/img/services-lg.jpg') }}" alt="">
                    </div>
                    <h2>@lang('header.commercial_loan')</h2>
                    <p>@lang('header.commercial_loan_description') </p>
                    <p><strong>@lang('header.business_support')</strong></p>
                    <p>@lang('header.interview_encouragement')</p>
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('storage/front/asset/img/single-services.jpg') }}" alt="">
                        </div>
                        <div class="col-md-6">

                            <ul>
                                <li> @lang('index.auto_loan_benefits.3')</li>
                                <li>  @lang('index.auto_loan_benefits.1')</li>
                                <li>  @lang('index.auto_loan_benefits.2')</li>
                                <li>@lang('index.auto_loan_benefits.0')</li>

                            </ul>
                        </div>
                    </div>
                    <hr>
                    <h2>@lang('header.simple_loan_process')</h2>

                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-angle-right-circle"></span>
                                </div>
                                <h4>@lang('header.simple_loan_process')</h4>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-note2"></span>
                                </div>
                                <h4>@lang('header.less_paperwork')</h4>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="single-improvement">
                                <div class="icon">
                                    <span class="pe-7s-delete-user"></span>
                                </div>
                                 <h4>@lang('header.choose_loan_amount')</h4>
                            </div>
                        </div>
                    </div>
                    <hr>


                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="sidebar-area">
                    <div class="single-sidebar">
                        <div class="services">
                            <ul>
                                <li><a href="{{ route('detailsalaire') }}"><i class="fa fa-long-arrow-right"></i>@lang('index.salary_loan')</a></li>
                                <li><a href="{{ route('detailetude') }}"><i class="fa fa-long-arrow-right"></i>@lang('index.study_loan')</a></li>
                                <li><a href="{{ route('detailentreprises') }}"><i class="fa fa-long-arrow-right"></i>@lang('index.business_loan')</a></li>
                                <li><a href="{{ route('detailpersonnel') }}"><i class="fa fa-long-arrow-right"></i>@lang('index.personal_loan')</a></li>
                                <li><a href="{{ route('detailauto') }}"><i class="fa fa-long-arrow-right"></i>@lang('index.auto_loan')</a></li>
                                <li><a href="{{ route('detailimobilier') }}"><i class="fa fa-long-arrow-right"></i>@lang('index.home_loan')</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="single-sidebar">
                       <div class="sidebar-get-in-touch">
                           <h4>@lang('header.contact_us')</h4>

                            <ul>
                                <li><span></span> <a href="+33 757755459"> +33 757755459 </a></li>
                                <li><span></span> <a href="mailtro:courrier@pretshorizon.com">courrier@pretshorizon.com </a></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
