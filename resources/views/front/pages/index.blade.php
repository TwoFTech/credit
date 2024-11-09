@extends('front/layouts/master')
@section('content')

 <!-- start header area -->
 <section class="main-slider-area" >
    <div class="active-main-slider owl-carousel" >
        <div class="main-slider-item" style="background-image: url({{ asset('storage/front/asset/img/slider-1.jpg') }});">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRIght">@lang('header.banking_provider') </h2>
                                    <h2 class="main-title" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">@lang('header.lowest_interest')
                                    <div class="welcome-button" data-animation-in="fadeInDown" data-animation-out="animate-out fadeOutDown">
                                        <a href="{{ route('demandepret.create') }}" class="btn btn-default button-primary"
                                        style="background: blue; min-width: 190px;  border-color: blue; white-space: nowrap; padding: 10px 20px; text-align: center;">
                                        @lang('header.request_loan')
                                     </a>
                                        <a href="{{ route('contact') }}" class="button-secondary btn btn-default" style="background-color: #FFBD59;  border-color: #FFBD59;">@lang('header.contact_us')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-item" style="background-image: url({{ asset('storage/front/asset/img/slider-1.jpg') }});">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="sub-title" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">@lang('header.satisfied_clients')</h2>
                                    <h2 class="main-title" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">@lang('header.loan_steps')</h2>
                                    <div class="welcome-button" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutLeft">
                                        <a href="{{ route('demandepret.create') }}" class="btn btn-default button-primary"
                                        style="background: blue; min-width: 190px; white-space: nowrap; padding: 10px 20px;  border-color: blue; text-align: center;">
                                          @lang('header.request_loan')
                                     </a>
                                        <a href="{{ route('contact') }}" class="button-secondary btn btn-default" style="background-color: #FFBD59;  border-color: #FFBD59;">@lang('header.contact_us')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-slider-item" style="background-image: url({{ asset('storage/front/asset/img/slider-1.jpg') }});">
            <div class="slider-one-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-slider-welcome-text">
                                <div class="slider-cell">
                                    <h2 class="sub-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">@lang('header.financing_2_percent')</h2>
                                    <h2 class="main-title" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">@lang('header.quick_financing')</h2>
                                    <div class="welcome-button" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOutRight">
                                        <a href="{{ route('demandepret.create') }}" class="btn btn-default button-primary"
                                        style="background: blue; min-width: 190px; white-space: nowrap; padding: 10px 20px; text-align: center;  border-color: blue;">
                                          @lang('header.request_loan')
                                     </a>
                                        <a href="{{ route('contact') }}" class="button-secondary btn btn-default" style="background-color: #FFBD59; border-color: #FFBD59;">@lang('header.contact_us')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of header area -->
<!-- start header bottom section -->
<div class="header-bottom-section" style="background-color: blue">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-header-bottom">
                    <div class="icon" >
                        <img src="{{ asset('storage/front/asset/img/clock.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <p>@lang('header.loan_approvals')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-header-bottom">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/user.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <p>@lang('header.satisfied_clients_count')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-header-bottom">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/camera.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <p>@lang('header.no_prepayment_fees')>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-header-bottom">
                    <div class="icon">'
                        <img src="{{ asset('storage/front/asset/img/map-pin-2.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <p>@lang('header.global_offices')</p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6">
                <div class="single-header-bottom mb0">
                    <div class="search-box">
                        <input type="text" name="s" placeholder="Enter your Zip Code">
                        <button type="submit" class="fa fa-search"></button>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- end of header bottom section -->
<!-- start featured section -->
<section class="featured-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>@lang('header.loans_for_life')</h2>
                    <p>@lang('header.loan_solutions')</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon" >
                        <img src="{{ asset('storage/front/asset/img/icon-1.png') }}"  alt="" />
                    </div>
                    <div class="content">
                        <h4>@lang('header.personal')</h4>
                        <p>@lang('header.personal_loan_details')</p>
                        <a href="{{ route('detailpersonnel') }}" style="color: blue">@lang('header.read_more') <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/car.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <h4>@lang('header.auto')</h4>
                        <p>@lang('header.auto_loan_details')</p>
                        <a href="{{ route('detailauto') }}" style="color: blue">@lang('header.read_more') <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/home.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <h4>@lang('header.business')</h4>
                        <p>@lang('header.business_loan_details')</p>
                        <a href="{{ route('detailentreprises') }}" style="color: blue">@lang('header.read_more') <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/education.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <h4>@lang('header.immobilier')</h4>
                        <p>@lang('header.home_loan_details')</p>
                        <a href="{{ route('detailimobilier') }}" style="color: blue">@lang('header.read_more') <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/money.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <h4>@lang('header.study')</h4>
                        <p>@lang('header.student_loan_details')</p>
                        <a href="{{ route('detailetude') }}" style="color: blue">@lang('header.read_more') <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-featured">
                    <div class="icon">
                        <img src="{{ asset('storage/front/asset/img/card.png') }}" alt="" />
                    </div>
                    <div class="content">
                        <h4>
                            @lang('header.salary')</h4>
                        <p>@lang('header.salary_loan_details')</p>
                        <a href= "{{ route('detailsalaire') }}" style="color: blue">@lang('header.read_more') <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of featured section -->
<!-- start get consultation section -->
<section class="get-consultation-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="get-consultation-content">

                    <h2>@lang('header.loan_check_message')</h2>
                    <a href="{{ route('demandepret.create') }}" class="button btn btn-default btn-sm" style="background-color: blue">@lang('header.request_loan')</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of get consultation section -->
<!-- start why choose lender section -->
<section class="why-choose-lender section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>@lang('header.why_choose_lender')
                    </h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-why-choose">
                    <div class="choose-img">
                        <img src="{{ asset('storage/front/asset/img/choose-1.jpg') }}" alt="" />
                    </div>
                    <div class="choose-title" style="background-color: blue">
                        <h4 style="background-color: blue"><img src="{{ asset('storage/front/asset/img/icon-2.png') }}" alt="">@lang('header.no_hidden_fees')</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-why-choose">
                    <div class="choose-img">
                        <img src="{{ asset('storage/front/asset/img/choose-2.jpg') }}" alt="" />
                    </div>
                    <div class="choose-title" style="background-color: blue">
                        <h4><img src="{{ asset('storage/front/asset/img/icon-3.png') }}" alt="">@lang('header.less_paperwork')</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-why-choose">
                    <div class="choose-img">
                        <img src="{{ asset('storage/front/asset/img/choose-3.jpg') }}" alt="" />
                    </div>
                    <div class="choose-title" style="background-color: blue">
                        <h4><img src="{{ asset('storage/front/asset/img/icon-4.png') }}" alt="">@lang('header.specialist_team')</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of why choose lender section -->
<!-- start loan process section -->
<section class="loan-process-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>@lang('header.simple_loan_process')</h2>

                </div>
            </div>
        </div>
        <div class="row process-list">
            <div class="col-lg-3 col-md-6 process text-center">
                <div class="single-process">
                    <div class="proces-icon">
                        <span class="pe-7s-note"></span>
                    </div>
                    <div class="content">
                        <h4 class="process-title">@lang('header.choose_loan_amount')</h4>
                        <p>@lang('header.loan_conditions')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 process text-center">
                <div class="single-process">
                    <div class="proces-icon">
                        <span class="pe-7s-id"></span>
                    </div>
                    <div class="content">
                        <h4 class="process-title">
                           @lang('header.provide_document')</h4>
                        <p>@lang('header.document_requirement')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 process text-center">
                <div class="single-process">
                    <div class="proces-icon">
                        <span class="pe-7s-check"></span>
                    </div>
                    <div class="content">
                        <h4 class="process-title">@lang('header.loan_approved')</h4>
                        <p>@lang('header.loan_approval_details')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 process text-center">
                <div class="single-process">
                    <div class="proces-icon">
                        <span class="pe-7s-cash"></span>
                    </div>
                    <div class="content">
                        <h4 class="process-title">@lang('header.get_your_money')</h4>
                        <p>@lang('header.money_credit')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of loan process section -->
<!-- start team section -->
<section class="team-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>@lang('header.our_experts')</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="{{ asset('storage/front/asset/img/team-1.jpg') }}" alt="" />
                        <div class="team-hover">
                            <div class="display-table">
                                <div class="display-cell">
                                    <div class="team-hover-content">

                                        <p>@lang('header.consultant_description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Stuart Binny</h4>
                        <p>@lang('header.consultant')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="{{ asset('storage/front/asset/img/team-2.jpg') }}" alt="" />
                        <div class="team-hover">
                            <div class="display-table">
                                <div class="display-cell">
                                    <div class="team-hover-content">
                                        <p>@lang('header.operations_head_description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Joe Elsworth </h4>
                        <p>@lang('header.operations_head')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="{{ asset('storage/front/asset/img/team-3.jpg') }}" alt="" />
                        <div class="team-hover">
                            <div class="display-table">
                                <div class="display-cell">
                                    <div class="team-hover-content">

                                        <p>@lang('header.general_manager_description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Eliza Doe</h4>
                        <p>@lang('header.general_manager')</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="{{ asset('storage/front/asset/img/team-4.jpg') }}" alt="" />
                        <div class="team-hover">
                            <div class="display-table">
                                <div class="display-cell">
                                    <div class="team-hover-content">

                                        <p>@lang('header.customer_relations_description')</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Thomas Finch</h4>
                        <p>@lang('header.customer_relations')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of team section -->
<!-- start loan calculator section -->
<section class="loan-calculator section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="calculator-form">
                    <div class="form-title">
                        <h2>@lang('header.calculate_loan')</h2>
                        <p>@lang('header.loan_simulation_message')</p>
                    </div>
                    <form id="loanCalculatorForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-select">
                                    <label for="amount">@lang('header.amount_to_borrow')</label>
                                    <input type="number" id="amount" name="amount" placeholder="3000" value="3000" required oninput="calculateLoan()">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-select">
                                    <label for="duration">@lang('header.duration_months')</label>
                                    <input type="number" id="duration" name="duration" placeholder="12" value="12" required oninput="calculateLoan()">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-input">
                                    <label for="rate">@lang('header.fixed_rate')</label>
                                    <input type="text" id="rate" name="rate" value="2" readonly>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="results" style="margin-top: 20px; border: 2px solid #007bff; padding: 20px; border-radius: 10px; background-color: #f8f9fa;">
                        <h4 style="text-align: center; color: #007bff;">@lang('header.loan_results')</h4>
                        <p><strong>@lang('header.monthly_payment') :</strong> <span id="monthlyPayment" style="font-size: 1.5em; color: #007bff;"></span> €</p>
                        <p><strong>@lang('header.total_payment'):</strong> <span id="totalPayment" style="font-size: 1.5em; color: #007bff;"></span> €</p>
                    </div>

                    <!-- Bouton "  @lang('header.request_loan')" -->
                    <div class="apply-loan-btn" style="text-align: center; margin-top: 20px;">
                        <a href="{{ route('demandepret.create') }}" class="btn btn-primary" style="padding: 10px 30px; font-size: 18px; background-color: #007bff; border-color: #007bff;">
                              @lang('header.request_loan')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of loan calculator section -->
<!-- start testimonial section -->
<section class="testimonial-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2>@lang('header.testimonials')</h2>

                </div>
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/prof1.jpg') }}" alt="" />
                    </div>
                    <div class="testimonial-content">
                        <h4>Dwayne Johnson</h4>
                        <p>@lang('header.testimonial_message_1')</p>
                    </div>
                </div>

                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/testimonial-1.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>Stuart Binny</h4>
                        <p>@lang('header.testimonial_message_2')</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/prof2.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>Mukib kukis</h4>
                        <p>@lang('header.testimonial_message_3')</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/testimonial-2.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>johon due</h4>
                        <p>@lang('header.testimonial_message_4')</p>
                    </div>
                </div>
                <div class="single-testimonial">
                    <div class="testimonial-img">
                        <img src="{{ asset('storage/front/asset/img/testimonial.jpg') }}" alt="">
                    </div>
                    <div class="testimonial-content">
                        <h4>Karolayns D</h4>
                        <p>@lang('header.testimonial_message_5')</p>
                    </div>
                </div>
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
<!-- end of testimonial section -->

<section class="brand-section" style="background-color: blue">
    <div class="container" >
        <div class="brand-slider owl-carousel">
            <div class="single-brand">
                <img src="{{ asset('storage/front/asset/img/brand-1.png') }}" alt="" />
            </div>
            <div class="single-brand">
                <img src="{{ asset('storage/front/asset/img/brand-2.png') }}" alt="" />
            </div>
            <div class="single-brand">
                <img src="{{ asset('storage/front/asset/img/brand-3.png') }}" alt="" />
            </div>
            <div class="single-brand">
                <img src="{{ asset('storage/front/asset/img/brand-4.png') }}" alt="" />
            </div>
            <div class="single-brand">
                <img src="{{ asset('storage/front/asset/img/brand-5.png') }}" alt="" />
            </div>
        </div>
    </div>
</section>
<!-- end of brand section -->


<script>
    function calculateLoan() {
        const amount = parseFloat(document.getElementById('amount').value);
        const duration = parseInt(document.getElementById('duration').value);
        const rate = 2 / 100; // Taux fixe de 2%

        if (amount > 0 && duration > 0) {
            // Calcul du taux mensuel
            const monthlyRate = rate / 12;

            // Calcul de la mensualité
            const monthlyPayment = (amount * monthlyRate) / (1 - Math.pow(1 + monthlyRate, -duration));
            const totalPayment = monthlyPayment * duration;

            // Afficher les résultats
            document.getElementById('monthlyPayment').innerText = monthlyPayment.toFixed(2);
            document.getElementById('totalPayment').innerText = totalPayment.toFixed(2);
        } else {
            // Valeurs par défaut si les entrées ne sont pas valides
            document.getElementById('monthlyPayment').innerText = "0.00";
            document.getElementById('totalPayment').innerText = "0.00";
        }
    }

    // Calcul initial avec les valeurs par défaut au chargement de la page
    window.onload = calculateLoan;
</script>

@endsection
