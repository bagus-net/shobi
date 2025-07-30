<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/img/difest-logo.png') }}" alt="" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/img/difest-logo.png') }}" alt="" height="30">
                    </span>
                </a>

                <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ URL::asset('/assets/img/difest-logo.png') }}" alt="" height="40">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ URL::asset('/assets/img/difest-logo.png') }} alt="" height="30">
                    </span>
                </a>
            </div>

            <!-- Hamburger menu for mobile sidebar toggle -->
            <button type="button" class="btn btn-sm px-3 font-size-20 header-item waves-effect vertical-menu-btn d-block d-lg-none" id="sidebarToggle" aria-label="Toggle sidebar">
                <i class="uil uil-bars"></i>
            </button>

            <!-- App Search-->

        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="uil-minus-path"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    
                    {{-- <i class="fas fa-user"></i> --}}
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"> Hai {{Str::ucfirst(Auth::user()->name)}}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-17"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="/peserta"><i class="uil-home-alt font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">@lang( 'Peserta')</span></a>


                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
                            <span class="align-middle">@lang('Logout')</span>
                        </button>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="uil-cog"></i>
                </button>
            </div>

        </div>
    </div>
</header>