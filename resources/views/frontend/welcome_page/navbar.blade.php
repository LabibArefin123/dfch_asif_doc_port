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

                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                        About
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="conditionsDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Conditions
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="conditionsDropdown">
                        <li><a class="dropdown-item" href="#">Piles</a></li>
                        <li><a class="dropdown-item" href="#">Fissure</a></li>
                        <li><a class="dropdown-item" href="#">Fistula</a></li>
                        <li><a class="dropdown-item" href="#">IBS</a></li>
                        <li><a class="dropdown-item" href="#">Colorectal Cancer</a></li>
                    </ul>

                </li>
                <li class="nav-item"><a href="#specializations" class="nav-link">Specializations</a></li>
                <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#experience" class="nav-link">Experience</a></li>
                <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"> <a href="{{ route('book') }}"
                        class="nav-link {{ request()->routeIs('book') ? 'active' : '' }}">
                        Book
                    </a></li>
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
