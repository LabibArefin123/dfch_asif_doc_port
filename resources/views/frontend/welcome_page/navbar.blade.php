<link rel="stylesheet" href="{{ asset('css/frontend/custom_navbar.css') }}">

<nav class="navbar navbar-expand-lg portfolio-navbar fixed-top">
    <div class="container">

        <!-- BRAND -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
            <img src="{{ asset('uploads/images/icon2.JPG') }}" alt="Dr Asif Logo" class="brand-logo">

            <div class="brand-text">
                <div class="brand-name">
                    Dr. Asif Almas Haque
                </div>
                <div class="brand-degree">
                    Consultant Colorectal & Laparoscopic Surgeon
                </div>
            </div>
        </a>

        <!-- MOBILE TOGGLE -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
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
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Professional Profile
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('page_1') }}">Education</a>
                        <a class="dropdown-item" href="{{ route('page_2') }}">Conferences</a>
                        <a class="dropdown-item" href="{{ route('page_3') }}">Publications</a>
                        <a class="dropdown-item" href="{{ route('page_4') }}">Memberships</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Conditions Treated
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('piles') }}">Piles</a>
                        <a class="dropdown-item" href="{{ route('fissure') }}">Fissure</a>
                        <a class="dropdown-item" href="{{ route('fistula') }}">Fistula</a>
                        <a class="dropdown-item" href="{{ route('colorectal_cancer') }}">Colorectal Cancer</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>

            </ul>

            <!-- CTA -->
            <a href="{{ route('book') }}" class="btn portfolio-btn ml-lg-3">
                Book Appointment
            </a>
        </div>

    </div>
</nav>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const dropdown = document.getElementById('conditions_dropdown');
        const toggleLink = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');

        // Toggle on click
        toggleLink.addEventListener('click', function(e) {
            e.preventDefault();

            const isOpen = menu.classList.contains('show');

            // Close any other open dropdowns
            document.querySelectorAll('.dropdown-menu.show').forEach(el => {
                el.classList.remove('show');
            });

            // Toggle current dropdown
            menu.classList.toggle('show', !isOpen);
            toggleLink.setAttribute('aria-expanded', !isOpen);
        });

        // Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                menu.classList.remove('show');
                toggleLink.setAttribute('aria-expanded', 'false');
            }
        });

    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

        const dropdown = document.getElementById('profile_dropdown');
        const toggleLink = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');

        // Toggle on click
        toggleLink.addEventListener('click', function(e) {
            e.preventDefault();

            const isOpen = menu.classList.contains('show');

            // Close any other open dropdowns
            document.querySelectorAll('.dropdown-menu.show').forEach(el => {
                el.classList.remove('show');
            });

            // Toggle current dropdown
            menu.classList.toggle('show', !isOpen);
            toggleLink.setAttribute('aria-expanded', !isOpen);
        });

        // Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                menu.classList.remove('show');
                toggleLink.setAttribute('aria-expanded', 'false');
            }
        });

    });
</script>
