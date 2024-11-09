<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from dompet.dexignlab.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 12:10:27 GMT -->
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
							<h3 class="title">Créez votre compte</h3>
							<p>Connectez-vous à votre compte pour commencer à utiliser Pret Horizon</p>
						</div>
						<form action="https://dompet.dexignlab.com/xhtml/index.html">
							<div class="mb-4">
								<label class="mb-1 text-dark">Nom d’utilisateur</label>
								<input type="text" class="form-control form-control" value="nom complet">
							</div>
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control form-control" value="hello@example.com">
							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<input type="password"id="dlab-password" class="form-control form-control" value="Password">
								<span class="show-pass eye">

									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>

								</span>
							</div>
							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
										<label class="form-check-label mt-1" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="page-forgot-password.html" class="btn-link text-primary">Sign in</a>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
							</div>
							<h6 class="login-title"><span>Or continue with</span></h6>

							<div class="mb-3">
								<ul class="d-flex align-self-center justify-content-center">
									<li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
									<li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
									<li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
								</ul>
							</div>
							<p class="text-center">Not registered?
								<a class="btn-link text-primary" href="page-error-404.html">Register</a>
							</p>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
						    <img src="{{ asset('storage/front/asset/img/logo banque 2.png') }}" alt="Prêt Horizon Logo" style="max-height: 150px; width: auto;" />

							<p>Your true value is determined by how much more you give in value than you take in payment. ...</p>
						</div>
						<div class="login-media text-center">
							<img src="images/login.png" alt="">
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

<!-- Mirrored from dompet.dexignlab.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 12:10:29 GMT -->
</html>



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Logo -->
                <div class="text-center mb-4">
                    <img src="{{ asset('storage/dashboard/images/profile/nana.jpeg') }}" alt="Logo" class="img-fluid" style="max-width: 150px;">
                </div>

                <div class="card shadow-lg">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>{{ __('Inscription') }}</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Nom -->
                            <div class="form-group mb-3">
                                <label for="nom">{{ __('Nom') }}</label>
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="form-group mb-3">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Sexe -->
                            <div class="form-group mb-3">
                                <label for="sexe">{{ __('Sexe') }}</label>
                                <select id="sexe" class="form-control @error('sexe') is-invalid @enderror" name="sexe" required>
                                    <option value="homme">{{ __('Homme') }}</option>
                                    <option value="femme">{{ __('Femme') }}</option>
                                </select>

                                @error('sexe')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Téléphone -->
                            <div class="form-group mb-3">
                                <label for="telephone">{{ __('Téléphone') }}</label>
                                <input id="telephone" type="number" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Pays -->
                            <div class="form-group mb-3">
                                <label for="pays">{{ __('Pays') }}</label>
                                <input id="pays" type="text" class="form-control @error('pays') is-invalid @enderror" name="pays" value="{{ old('pays') }}" required>

                                @error('pays')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Ville -->
                            <div class="form-group mb-3">
                                <label for="ville">{{ __('Ville') }}</label>
                                <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required>

                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Mot de passe -->
                            <div class="form-group mb-3">
                                <label for="password">{{ __('Mot de passe') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirmation du mot de passe -->
                            <div class="form-group mb-4">
                                <label for="password-confirm">{{ __('Confirmer le mot de passe') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <!-- Bouton d'inscription -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('S\'inscrire') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
 --}}
