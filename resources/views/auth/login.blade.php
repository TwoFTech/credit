@extends('front.layouts.master')
@section('content')

<div class="login-container" style="
    width: 100%;
    max-width: 400px;
    padding: 30px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    margin: 50px auto;
">
    <h2 style="text-align: center; color: #333; margin-bottom: 20px; font-size: 24px;">Connexion</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group" style="margin-bottom: 20px; position: relative;">
            <label for="email" style="display: block; color: #555; margin-bottom: 8px; font-weight: bold;">Adresse Email</label>
            <input type="email" id="email" name="email" required placeholder="Entrez votre email" style="
                width: 100%;
                padding: 10px 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                outline: none;
                transition: all 0.3s ease;
            ">
        </div>

        <div class="form-group" style="margin-bottom: 20px; position: relative;">
            <label for="password" style="display: block; color: #555; margin-bottom: 8px; font-weight: bold;">Mot de passe</label>
            <input type="password" id="password" name="password" required placeholder="Entrez votre mot de passe" style="
                width: 100%;
                padding: 10px 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                outline: none;
                transition: all 0.3s ease;
            ">
        </div>

        <button type="submit" class="login-btn" style="
            width: 100%;
            padding: 10px;
            background-color: blue;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        ">Se connecter</button>

        <div class="extra-links" style="
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        ">
            <a href="{{ route('password.request') }}" style="
                text-decoration: none;
                color: blue;
                font-size: 14px;
                transition: color 0.3s ease;
            ">Mot de passe oublié ?</a>
            <a href="{{ route('demandepret.create') }}" style="
                text-decoration: none;
                color: blue;
                font-size: 14px;
                transition: color 0.3s ease;
            ">S'inscrire</a>
        </div>
    </form>
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
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Connexion</h3>
							<p>Connectez-vous à votre compte pour commencer à utiliser Pret Horizon</p>
						</div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control form-control" value="hello@example.com" name="email">
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Mot de passe</label>
								<input type="password" id="password" class="form-control form-control" value="Password" name="password">
								<span class="show-pass eye">

									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>

								</span>
							</div>

							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Connexion</button>
							</div>
							//<h6 class="login-title"><span>Ou continuez avec</span></h6>

							{{-- <div class="mb-3">
								<ul class="d-flex align-self-center justify-content-center">
									<li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
									<li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
									<li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
								</ul>
							</div> --}}
							{{-- <p class="text-center">Vous n’êtes pas inscrit ?
								<a class="btn-link text-primary" href="{{ route('demandepret.create') }}">S'inscrire</a>
							</p>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
                            <img src="{{ asset('storage/front/asset/img/logo banque 2.png') }}" alt="Prêt Horizon Logo" style="max-height: 150px; width: auto;" />

							<p>Votre valeur réelle est déterminée par le montant que vous donnez en valeur de plus que ce que vous prenez en paiement. ...

                            </p>
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
</html> -- --}}

















{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
   <form method="POST" action="{{ route('login') }}">

        @if(session('message'))
          <div class="alert alert-info">
        {{ session('message') }}
          </div>
        @endif
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
