
@extends('front.layouts.master')

@section('content')
<div class="password-reset-container" style="display: flex; justify-content: center; align-items: center; min-height: 70vh; background-color: #f9f9f9;">
    <div class="password-reset-box" style="width: 100%; max-width: 500px; padding: 30px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <h2 style="text-align: center; color: #333; margin-bottom: 20px;">Mot de Passe Oublié</h2>

        <p style="text-align: center; color: #666; margin-bottom: 30px;">
            Veuillez saisir votre adresse e-mail pour recevoir un lien de réinitialisation de votre mot de passe.
        </p>

        @if (session('status'))
            <div style="color: #FFBD59; text-align: center; font-size: 16px; margin-bottom: 15px;">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="form-group" style="margin-bottom: 20px;">
                <label for="email" style="font-size: 14px; color: #333;">Adresse Email</label>
                <input type="email" id="email" name="email" required placeholder="Entrez votre adresse email"
                       style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ddd; box-sizing: border-box;">
            </div>

            <button type="submit" style="width: 100%; padding: 12px; background-color: blue; color: #fff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
                Envoyer le lien de réinitialisation
            </button>
        </form>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('login') }}" style="color: blue; text-decoration: none;">Retour à la connexion</a>
        </div>
    </div>
</div>
@endsection


{{-- <!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from dompet.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 12:04:47 GMT -->
<head>
   <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="">
	<meta name="keywords" content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
	<meta name="description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
	<meta property="og:description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<!-- Page Title Here -->
	<title>Pret Horizon</title>



    <link href="{{ asset('storage/dashboard/css/style.css') }}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Connexion</h3>
							<p>Connectez-vous à votre compte pour commencer à utiliser Pret Horizon</p>
						</div>
						<form action="{{ route('password.email') }}" method="POST">
                            @csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control form-control" value="hello@example.com" name="email">
                                @error('email')
                                 <span class="text-danger">
                                    {{ $message }}
                                 </span>
                                @enderror
							</div>

							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Connexion</button>
							</div>
							<h6 class="login-title"><span>Ou continuez avec</span></h6>

							<div class="mb-3">
								<ul class="d-flex align-self-center justify-content-center">
									<li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
									<li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
									<li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
								</ul>
							</div>
							<p class="text-center">Vous n’êtes pas inscrit ?
								<a class="btn-link text-primary" href="[[route('demandepret.create')]]">S'inscrire</a>
							</p>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
                            <img src="{{ asset('storage/front/asset/img/logo banque 2.png') }}" alt="Prêt Horizon Logo" style="max-height: 150px; width: auto;" />


							<p>Votre valeur réelle est déterminée par le montant que vous donnez en valeur de plus que ce que vous prenez en paiement. ...</p>
						</div>
						<div class="login-media text-center">
							<img src="{{ asset('storage/dashboard/asset/images/login-1.png') }}" class="w-50" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
      <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 12:04:50 GMT -->
</html> --}}


{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
