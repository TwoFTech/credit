<!-- start header area -->
<header class="header-area">
    <style>
        /* Style pour les liens du menu */
        #cssmenu ul li a {
            color: white;
        }

        #cssmenu ul li a:hover {
            color: white;
            text-decoration: none;
        }

        /* Style pour les sous-liens */
        #cssmenu ul li ul li a {
            color: white;
        }

        #cssmenu ul li ul li a:hover {
            color: white;
        }

        /* Réduction de la hauteur du header */
        .header-area .logo-right-address {
            padding: 10px 0;
        }

        .header-area .single-address {
            margin-bottom: 5px;
        }

        .header-area .menu-area {
            padding: 5px 0;
        }

        /* Ajustement de la taille du logo */
        .sitelogo img {
            max-height: 170px; /* Ajuste la taille pour qu'elle corresponde aux autres éléments */
            width: auto;
        }


    </style>

    <div class="logo-right-address">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="sitelogo" style="margin-top: -5px;">
                        <a href="{{ route('front.pages.index') }}">
                            <img src="{{ asset('storage/front/asset/img/logo banque 2.png') }}" alt=""
                                style="max-height: 100px; width: auto;" />
                        </a>
                    </div>
                </div>

                <div class="col-md-8"  >
                    <div class="single-address">
                        <div class="icon" style="border: 1px solid #FFBD59; padding: 5px; border-radius: 5px;">
                            <i class="fas fa-phone" style="color: #FFBD59; font-size: 15px;"></i>
                        </div>
                        <div class="content">
                            <p style="color: black;">
                                <span style="color: black;">@lang('header.contact_us'):</span> <span style="color: black;">
                                    <a href="tel:+33 757755459">+33 757755459</a></span>
                            </p>
                        </div>
                    </div>

                    <div class="single-address">
                        <div class="icon" style="border: 1px solid #FFBD59; padding: 5px; border-radius: 5px;">
                            <i class="fas fa-envelope" style="color: #FFBD59; font-size: 15px;"></i>
                        </div>
                        <div class="content">
                            <p style="color: black;">
                                <span style="color: black;">@lang('header.contact_email')</span>
                                <span style="color: black;">
                                    <a href="mailto:courrier@pretshorizon.com">courrier@pretshorizon.com</a>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="single-address">
                        <a href="{{ route('demandepret.create') }}" class="button btn btn-default btn-sm"
                            style="background-color: blue; color: white; padding: 5px 10px; border-radius: 5px;">
                            <i class="fa fa-reply-all" style="color: white;"></i>@lang('header.request_loan')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-area" style="background-color: blue">
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-11">
                    <div id="cssmenu">
                        <ul>
                            <li><a href="{{ route('front.pages.index') }}">@lang('header.home')</a></li>
                            <li><a href="{{ route('about') }}">@lang('header.about')</a></li>
                            <li><a href="{{ route('services') }}">@lang('header.services')</a>
                                <ul>
                                    <li><a href="{{ route('serviceimage') }}">@lang('header.service_image')</a></li>
                                    <li><a href="{{ route('detailentreprises') }}">@lang('header.business')</a></li>
                                    <li><a href="{{ route('detailetude') }}">@lang('header.study')</a></li>
                                    <li><a href="{{ route('detailauto') }}">@lang('header.auto')</a></li>
                                    <li><a href="{{ route('detailsalaire') }}">@lang('header.salary')</a></li>
                                    <li><a href="{{ route('detailpersonnel') }}">@lang('header.personal')</a></li>
                                    <li><a href="{{ route('detailimobilier') }}">@lang('header.immobilier')</a></li>
                                </ul>
                            </li>
                            <li><a href="">@lang('header.pages')</a>
                                <ul>
                                    <li><a href="{{ route('calculator') }}">@lang('header.calculator')</a></li>
                                    <li><a href="{{ route('temoignage') }}">@lang('header.testimonials')</a></li>
                                    <li><a href="{{ route('demandepret.create') }}">@lang('header.request_loan')</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('contact') }}">@lang('header.contact_us')</a></li>
                            <li><a href="{{ route('suivredemande.mesDemandes') }}">@lang('header.track_request')</a></li>

                            @if (Auth::user())
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="route('logout')" class="py-4"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        @lang('header.logout')
                                    </a>
                                </form>
                            </li>
                            @else
                            <li><a href="{{ route('login') }}">@lang('header.login')</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end of header area -->
