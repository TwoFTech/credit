<!--**********************************
            Sidebar start
        ***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <div class="header-info ms-3">
                        <p>Bonjour, {{ Auth::user()->nom }}</p>
                        <p>Ton email est {{ Auth::user()->email }}</p>
                    </div>
                </a>



                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ route('profile.edit') }}" class="dropdown-item ai-icon">

                        <span class="ms-2">Profile </span>
                    </a>


                    <form method="POST" action="{{ route('logout') }}"  class="dropdown-item ai-icon">

                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Deconnexion') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </li>
            <li>
                <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <!-- Utilisation de l'icône Font Awesome de type "money-check" -->
                    <i class="fas fa-money-check" style="color: blue;"></i>
                    <span class="nav-text">Type de Prêt</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('typeprets.index') }}">Liste</a></li>
                    <li><a href="{{ route('typeprets.create') }}">Ajouter</a></li>
                </ul>
            </li>


                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <!-- Utilisation de l'icône Font Awesome de type "file-alt" -->
                            <i class="fas fa-file-alt" style="color: #D9A800;"></i>
                            <span class="nav-text">Demandes</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('demandes.index') }}">Liste</a></li>
                       
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <!-- Icône Font Awesome de type "users" -->
                            <i class="fas fa-users" style="color: hsl(205, 71%, 19%);"></i>
                            <span class="nav-text">Clients</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('clients.show') }}">Liste</a></li>
                        </ul>
                    </li>


             {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="*">Login<span class="badge badge-xs badge-success ms-3">Update</span></a></li>
                            <li><a href="*">Register<span class="badge badge-xs badge-success ms-3">Update</span></a></li>


                        </ul>
                    </li> --}}
        </ul>
        <div class="copyright" style="padding: 50px;">
            <p><strong>Tableau d'administration de Prêt Horizon</strong> © 2024 Tous droits réservés</p>
            <p class="fs-12"> <span class="heart"></span>Réalisé par Digital by Nadi</p>
        </div>

    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->
