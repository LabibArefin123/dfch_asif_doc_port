<!-- Footer -->
<footer class="footer bg-dark text-white pt-5">
    <link rel="stylesheet" href="{{ asset('css/frontend/custom_footer.css') }}">

    <div class="container">
        <div class="row g-4">

            <!-- Doctor Info -->
            <div class="col-md-3">
                <h5 class="fw-bold text-warning">Dr. Asif Almas Haque</h5>
                <p class="small mb-2">
                    Consultant Colorectal Surgeon <br>
                    Dr. Fazlul Haque Colorectal Hospital
                </p>
                <p class="small">
                    Advanced colorectal care with compassion, expertise, and modern treatment techniques.
                </p>
            </div>

            <!-- Professional Profile -->
            <div class="col-md-3">
                <h6 class="fw-bold text-warning mb-3">Professional Profile</h6>
                <ul class="list-unstyled small">
                    <li><a href="{{ route('about') }}" class="text-white text-decoration-none">Doctor’s Profile</a></li>
                    <li><a href="{{ route('page_1') }}" class="text-white text-decoration-none">Educational
                            Background</a></li>
                    <li><a href="{{ route('page_2') }}" class="text-white text-decoration-none">International
                            Conference</a></li>
                    <li><a href="{{ route('page_3') }}" class="text-white text-decoration-none">Journal Publication</a>
                    </li>
                    <li><a href="{{ route('page_4') }}" class="text-white text-decoration-none">Membership</a></li>
                </ul>
            </div>

            <!-- Treatments -->
            <div class="col-md-3">
                <h6 class="fw-bold text-warning mb-3">Treatments & Conditions</h6>
                <ul class="list-unstyled small">
                    <li>
                        <a href="{{ route('ibs') }}"
                            class="text-white text-decoration-none {{ request()->routeIs('ibs') ? 'active' : '' }}">IBS
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fistula') }}"
                            class="text-white text-decoration-none {{ request()->routeIs('fistula') ? 'active' : '' }}">Fistula
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('fissure') }}"
                            class="text-white text-decoration-none {{ request()->routeIs('fissure') ? 'active' : '' }}">Fissure
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('colorectal_cancer') }}"
                            class="text-white text-decoration-none {{ request()->routeIs('colorectal_cancer') ? 'active' : '' }}">Colorectal
                            Cancer
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('piles') }}"
                            class="text-white text-decoration-none {{ request()->routeIs('piles') ? 'active' : '' }}">What
                            is Piles?
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-3">
                <h6 class="fw-bold text-warning mb-3">Contact</h6>
                <p class="small mb-2">
                    <a href="#" class="top-link" id="openLocationModal">
                        <i class="fas fa-map-marker-alt"></i>
                        86 (New), 726/A (Old), Satmasjid Road
                    </a>
                </p>
                <p class="small mb-1">
                    📞 <a href="tel:+8801755697173" class="text-white text-decoration-none">
                        01755-697173
                    </a>
                </p>
                <p class="small">
                    ✉ <a href="mailto:asifh7000@gmail.com" class="text-white text-decoration-none">
                        asifh7000@gmail.com
                    </a>
                </p>
            </div>

        </div>

        <!-- Chamber Hours Horizontal -->
        <div class="row mt-5 pt-3 border-top border-secondary">
            <div class="col-12 text-center">
                <h6 class="fw-bold text-warning mb-3">Chamber Hours</h6>

                <div class="d-flex flex-wrap justify-content-center gap-4 small">
                    <div>Sat <strong>5PM–9PM</strong></div>
                    <div>Sun <strong>5PM–9PM</strong></div>
                    <div>Mon <strong>5PM–9PM</strong></div>
                    <div>Tue <strong>5PM–9PM</strong></div>
                    <div>Wed <strong>5PM–9PM</strong></div>
                    <div>Thu <strong>5PM–9PM</strong></div>
                    <div class="text-danger">Friday Off</div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center small mt-4 pt-3 border-top border-secondary">
            © {{ date('Y') }} Dr. Asif Almas Haque. All Rights Reserved.
        </div>

    </div>
</footer>
