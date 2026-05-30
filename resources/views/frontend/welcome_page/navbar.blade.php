<link rel="stylesheet" href="{{ asset('css/frontend/navbar/navbar-base.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/navbar/navbar-brand.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/navbar/navbar-menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/navbar/navbar-dropdown.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/navbar/navbar-button.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/navbar/navbar-mobile.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/navbar/navbar-overlay.css') }}">

<nav class="navbar portfolio-navbar fixed-top">

    <div class="container">

        {{-- Brand --}}
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center">

            <img src="{{ asset('uploads/images/icon.png') }}" alt="Logo" class="brand-logo">

            <div class="brand-text">
                <div class="brand-name">
                    Dr. Asif Almas Haque
                </div>

                <div class="brand-degree">
                    Consultant Colorectal & Laparoscopic Surgeon
                </div>
            </div>

        </a>

        {{-- Mobile Menu Button --}}
        <button id="navbarOpenBtn" class="navbar-toggler d-lg-none" type="button">

            <i class="fas fa-bars"></i>

        </button>

        {{-- Desktop Button --}}
        <a href="{{ route('contact') }}" class="btn portfolio-btn d-none d-lg-inline-flex">

            Book Appointment

        </a>

    </div>

</nav>

{{-- Overlay --}}
<div class="navbar-overlay"></div>

{{-- Drawer --}}
<div class="navbar-collapse" id="navbarCollapse">

    <div class="drawer-header">

        <h5>Menu</h5>

        <button id="navbarCloseBtn" class="navbar-close-btn">

            <i class="fas fa-times"></i>

        </button>

    </div>

    <ul class="navbar-nav portfolio-menu">

        <li class="nav-item">
            <a href="{{ route('welcome') }}" class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">
                Home
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>
        </li>

        <li class="nav-item dropdown" id="profile_dropdown">

            <a href="#" class="nav-link dropdown-toggle">
                Professional Profile
            </a>

            <ul class="dropdown-menu">

                <li>
                    <a href="{{ route('page_1') }}" class="dropdown-item">
                        Educational Background
                    </a>
                </li>

                <li>
                    <a href="{{ route('page_2') }}" class="dropdown-item">
                        International Conference
                    </a>
                </li>

                <li>
                    <a href="{{ route('page_3') }}" class="dropdown-item">
                        Journal Publication
                    </a>
                </li>

                <li>
                    <a href="{{ route('page_4') }}" class="dropdown-item">
                        Membership
                    </a>
                </li>

            </ul>

        </li>

        <li class="nav-item dropdown" id="conditions_dropdown">

            <a href="#" class="nav-link dropdown-toggle">
                Conditions We Treat
            </a>

            <ul class="dropdown-menu">

                <li><a href="{{ route('piles') }}" class="dropdown-item">Piles</a></li>
                <li><a href="{{ route('fissure') }}" class="dropdown-item">Fissure</a></li>
                <li><a href="{{ route('fistula') }}" class="dropdown-item">Fistula</a></li>
                <li><a href="{{ route('ibs') }}" class="dropdown-item">IBS</a></li>
                <li><a href="{{ route('colorectal_cancer') }}" class="dropdown-item">Colorectal Cancer</a></li>

            </ul>

        </li>

        <li class="nav-item">
            <a href="{{ route('gallery') }}" class="nav-link">
                Gallery
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('book') }}" class="nav-link">
                Book
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('faq') }}" class="nav-link">
                FAQ
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('contact') }}" class="nav-link">
                Contact
            </a>
        </li>

        <!-- Mobile CTA -->

        <li class="nav-item mt-3">

            <a href="{{ route('contact') }}" class="btn portfolio-btn w-100">

                Book Appointment

            </a>

        </li>

    </ul>

</div>
