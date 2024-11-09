<!-- start footer area -->
<section class="footer-area section-padding" style="background-color: #f8f9fa; padding-top: 20px; padding-bottom: 20px;">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Logo et informations -->
            <div class="col-md-4 col-lg-4">
                <div class="footer-widget">
                    <div class="footer-title">
                        <a href="{{ route('front.pages.index') }}"> <!-- Lien autour de l'image du logo -->
                            <img src="{{ asset('storage/front/asset/img/logo banque 2.png') }}" alt="Prêt Horizon Logo" style="max-height: 100px; width: auto;" />
                        </a>
                    </div>
                    <div>
                        <p>@lang('header.contact_address')</p>
                        <p><strong>@lang('header.contact_email')</strong> <a href="mailto:courrier@pretshorizon.com">courrier@pretshorizon.com</a></p> <!-- Lien mailto pour l'email -->
                    </div>
                </div>
            </div>

            <!-- Avertissement et Changement de langue -->
            <div class="col-md-4 col-lg-4 text-right">
                <div class="footer-widget">
                    <div class="form-widget">
                        <p>@lang('header.warning')</p>
                    </div>
                    <!-- Sélecteur de langue -->

                        <div class="footer-widget footer-widget--languages text-center"> <!-- Added this div for flags -->
                            <a href="locale/fr"><img src="{{ asset('storage/front/asset/img/france.png') }}" alt="Français" width="25"></a>
                    <a href="locale/de"><img src="{{ asset('storage/front/asset/img/allemagne.png') }}" alt="Allemand" width="25"></a>
                    <a href="locale/nl"><img src="{{ asset('storage/front/asset/img/netherland.png') }}" alt="Néerlandais" width="25"></a>
                    <a href="locale/en"><img src="{{ asset('storage/front/asset/img/usa.png') }}" alt="Anglais" width="25"></a>
                    <a href="locale/es"><img src="{{ asset('storage/front/asset/img/espagne.png') }}" alt="Espagnol" width="25"></a>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>
