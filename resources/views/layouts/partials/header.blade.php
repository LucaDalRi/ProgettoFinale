<header>
    <!-- Sidebar -->
    <nav
        id="sidebarMenu"
        class="collapse d-lg-block sidebar collapse bg-white"
        >
        <div class="position-sticky">
            <div id="list-group" class="list-group list-group-flush mx-3 mt-4">
                
                <div class="d-flex align-items-center">
                    <a
                        href="{{ route('dashboard') }}"
                        class="list-group-item list-group-item-action py-2 ripple {{ Route::current()->getName() == 'dashboard' ? 'active' : '' }}"
                        {{-- aria-current="true" --}}
                        >
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i
                            ><span>Dashboard</span>
                    </a>
                </div>
                <div class="d-flex align-items-center" id="test">
                    <a
                        href="{{ route('dishes.index') }}"
                        class="list-group-item list-group-item-action py-2 ripple {{ Route::current()->getName() == 'dishes.index' ? 'active' : '' }}"
                        >
                        <i class="fa-solid fa-utensils me-3"></i>
                        <span>Dishes</span>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <a
                        href="#analytics"
                        class="list-group-item list-group-item-action py-2 ripple"
                        ><i class="fas fa-chart-line fa-fw me-3"></i
                        ><span>Analytics</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav
        id="main-navbar"
        class="navbar navbar-expand-lg navbar-light bg-white fixed-top"
        >
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img
                    src="{{asset('icons/deliveboo.svg')}}"
                    height="35"
                    alt="Deliveboo logo"
                    loading="lazy"
                    />
            </a>
        <!-- Search form -->
        

        <!-- Right links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
        <ul class="navbar-nav ms-auto d-flex flex-row gap-2 align-items-center">
            <!-- Notification dropdown -->
            {{-- <li class="nav-item dropdown">
                <a
                    class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                    >
                    <i class="fs-4 fas fa-envelope"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
            </li> --}}

            <!-- Avatar -->
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-mdb-toggle="dropdown"
                    aria-expanded="false"
                    >
                    <img
                        src="https://wiki.dave.eu/images/4/47/Placeholder.png"
                        class="rounded-circle"
                        height="35"
                        alt="user profile image"
                        loading="lazy"
                        />
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink"
                    >
                    <li><a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a></li>
                    <li><a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        @endguest
        </div>
    </nav>
</header>