<link rel="stylesheet" href="{{ asset('css/frontend/custom_navbar.css') }}">

<nav class="navbar navbar-expand-lg portfolio-navbar fixed-top">
    <div class="container">

        <!-- Mobile Toggle -->
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
            <ul class="navbar-nav portfolio-menu">

                <li class="nav-item">
                    <a href="{{ route('welcome') }}"
                        class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#specializations" class="nav-link">Specializations</a></li>
                <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#reviews" class="nav-link">Reviews</a></li>
                <li class="nav-item"><a href="#faq" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>

            </ul>
        </div>

        <!-- CTA -->
        <div class="d-none d-lg-block ml-auto">
            <a href="#appointment" class="btn portfolio-btn">
                Book Appointment
            </a>
        </div>

    </div>
</nav>
