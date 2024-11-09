<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from thegenius.co/html/loanplus/preview/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Oct 2024 14:30:51 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('storage/front/asset/img/logo banque 2.png') }}" type="image/gif">
     <meta name="description" content="Prêt Horizon">
    <meta name="keywords" content="Prêt">
    <title>Prêt Horizon</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/front/asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/front/asset/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/front/asset/css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/front/asset/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('storage/front/asset/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: white; /* Couleur de fond pendant le chargement */
            z-index: 9999; /* Assurez-vous qu'il est au-dessus de tout le contenu */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preloader-logo img {
            width: 100px; /* Ajustez la taille de l'image selon vos besoins */
        }
    </style>
</head>

<body class="js">
    <div id="preloader">
        <div class="preloader_image">
            <img src="{{ asset('storage/front/asset/img/logo banque 2.png') }}" width="170">
        </div>
    </div>

    @include('front.layouts.partials.header')

    @yield('content')

    @include('front.layouts.partials.footer')

    <!-- Optional JavaScript -->
    <script src="{{ asset('storage/front/asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="{{ asset('storage/front/asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('storage/front/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('storage/front/asset/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('storage/front/asset/js/menumaker.js') }}"></script>
    <script src="{{ asset('storage/front/asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('storage/front/asset/js/slider.js') }}"></script>
    <script src="{{ asset('storage/front/asset/js/active.js') }}"></script>

    <script>
        $(window).on('load', function() {
            $('#preloader').fadeOut('slow'); // Fait disparaître le préchargeur lentement
        });
    </script>
</body>
</html>
