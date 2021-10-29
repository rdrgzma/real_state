<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="https://vemto.app/favicon.png" alt="Vemto Logo" class="bg-white brand-image img-circle">
        <span class="brand-text font-weight-light">real_state</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu">

                @auth
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="nav-icon icon ion-md-pulse"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon icon ion-md-apps"></i>
                            <p>
                                Administrator
                                <i class="nav-icon right icon ion-md-arrow-round-back"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('view-any', App\Models\Client::class)
                                <li class="nav-item">
                                    <a href="{{ route('clients.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Clients</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\Office::class)
                                <li class="nav-item">
                                    <a href="{{ route('offices.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Offices</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\Partner::class)
                                <li class="nav-item">
                                    <a href="{{ route('partners.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Partners</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\Properties::class)
                                <li class="nav-item">
                                    <a href="{{ route('all-properties.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Properties</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\Realtor::class)
                                <li class="nav-item">
                                    <a href="{{ route('realtors.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Realtors</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\User::class)
                                <li class="nav-item">
                                    <a href="{{ route('users.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Users</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon icon ion-md-apps"></i>
                            <p>
                                Offices
                                <i class="nav-icon right icon ion-md-arrow-round-back"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('view-any', App\Models\Properties::class)
                                <li class="nav-item">
                                    <a href="{{ route('all-properties.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Properties</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\Realtor::class)
                                <li class="nav-item">
                                    <a href="{{ route('realtors.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Realtors</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\Partner::class)
                                <li class="nav-item">
                                    <a href="{{ route('partners.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Partners</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\Client::class)
                                <li class="nav-item">
                                    <a href="{{ route('clients.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Clients</p>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon icon ion-md-apps"></i>
                            <p>
                                Realtors
                                <i class="nav-icon right icon ion-md-arrow-round-back"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('view-any', App\Models\Properties::class)
                                <li class="nav-item">
                                    <a href="{{ route('all-properties.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Properties</p>
                                    </a>
                                </li>
                            @endcan
                            @can('view-any', App\Models\Partner::class)
                                <li class="nav-item">
                                    <a href="{{ route('partners.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Partners</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\Client::class)
                                <li class="nav-item">
                                    <a href="{{ route('clients.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Clients</p>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon icon ion-md-apps"></i>
                            <p>
                                Partners
                                <i class="nav-icon right icon ion-md-arrow-round-back"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('view-any', App\Models\Client::class)
                                <li class="nav-item">
                                    <a href="{{ route('clients.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Clients</p>
                                    </a>
                                </li>
                            @endcan

                            @can('view-any', App\Models\Properties::class)
                                <li class="nav-item">
                                    <a href="{{ route('all-properties.index') }}" class="nav-link">
                                        <i class="nav-icon icon ion-md-radio-button-off"></i>
                                        <p>Properties</p>
                                    </a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                @endauth
                <li class="nav-item">
                    <a href="https://adminlte.io/docs/3.1//index.html" target="_blank" class="nav-link">
                        <i class="nav-icon icon ion-md-help-circle-outline"></i>
                        <p>Docs</p>
                    </a>
                </li>

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="nav-icon icon ion-md-exit"></i>
                            <p>{{ __('Logout') }}</p>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
