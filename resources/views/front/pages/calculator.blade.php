@extends('front/layouts/master')
@section('content')


<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>@lang('header.calculator')</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('front.pages.index') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('header.calculator')</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

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
