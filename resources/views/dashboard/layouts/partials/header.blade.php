<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between" style="color: blue;">
                        <div class="header-left">
                            <div class="dashboard_bar"  style="color: blue;">
                                Tableau de bord
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">

                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode p-0" href="javascript:void(0);">
                                    <i id="icon-light" class="fas fa-sun" style="color: blue;"></i>
                                    <i id="icon-dark" class="fas fa-moon" style="color: blue;"></i>
                                </a>
                            </li>


                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" style="fill: blue;">
                                        <!-- Contenu du SVG pour l'icône de notification -->
                                        <path d="M14 1C14.5523 1 15 1.44772 15 2V5.26336C18.3763 5.72414 21 8.71337 21 12V17.1525L22.1753 19.3055C22.5512 19.9463 22.3073 20.6711 21.8269 21.0854C21.4077 21.4536 20.6462 21.7 19.9453 21.7H15C15 22.5523 14.5523 23 14 23C13.4477 23 13 22.5523 13 21.7H8.05467C7.35374 21.7 6.59227 21.4536 6.1731 21.0854C5.69268 20.6711 5.44873 19.9463 5.82466 19.3055L7 17.1525V12C7 8.71337 9.62369 5.72414 13 5.26336V2C13 1.44772 13.4477 1 14 1Z" fill="blue"/>
                                    </svg>
                                    <span class="badge light text-white rounded-circle" style="background-color: #D9A800;">
                                        {{ $notifications->count() }}
                                    </span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="dlab_W_Notification1" class="widget-media dlab-scroll p-3" style="height:380px;">
                                        <h4>Notifications</h4>
                                        <ul style="list-style-type: none; padding: 0; margin: 0;">
                                            @forelse ($notifications as $notification)
                                                <li style="font-size: 14px; padding: 10px 0; border-bottom: 1px solid #ddd;">
                                                    Nouvelle demande de prêt de <strong>{{ $notification->data['nom'] }}</strong> pour un montant de <strong>{{ $notification->data['montant'] }}</strong>.
                                                </li>
                                            @empty
                                                <li style="font-size: 14px; padding: 10px 0;">Aucune nouvelle notification.</li>
                                            @endforelse
                                        </ul>
                                        <form method="POST" action="{{ route('header.markNotificationsAsRead') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Marquer toutes comme lues</button>
                                        </form>
                                    </div>
                                    <a class="all-notification text-primary" href="javascript:void(0);">Voir plus de notification
                                        <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
                    Header end
                ***********************************-->
z
