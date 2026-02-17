<!-- Membership Section -->
<section id="membership" class="bg-light py-5 w-100">
    <link rel="stylesheet" href="{{ asset('css/frontend/custom_membership.css') }}">

    <div class="container">
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold text-warning">Professional Membership</h2>
                <p class="small text-muted">Driving technology and excellence in colorectal surgery</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            @php
                $memberships = [
                    ['name' => 'Society of Surgeons of Bangladesh', 'image' => null],
                    ['name' => 'The Society of Endo-Laparoscopic Surgeons of Bangladesh (SELSB)', 'image' => null],
                    ['name' => 'The Royal College of Surgeons of Edinburgh', 'image' => null],
                    ['name' => 'acpgbi.org.uk', 'image' => null],
                    ['name' => 'The Royal College of Physicians and Surgeons of Glasgow', 'image' => null],
                    ['name' => 'American Society of Colon and Rectal Surgeons (ASCRS)', 'image' => null],
                    ['name' => 'American College of Surgeons', 'image' => null],
                    ['name' => 'The Endoscopic and Laparoscopic Surgeons of Asia (ELSA)', 'image' => null],
                    ['name' => 'Colon and Rectal Surgeons of Bangladesh', 'image' => null],
                ];
                $defaultImage = asset('uploads/images/frontend/default_membership.png');
            @endphp

            @foreach ($memberships as $membership)
                <div class="col-md-6 col-lg-4">
                    <a href="https://www.google.com" target="_blank" class="text-decoration-none">
                        <div class="membership-card p-3 bg-white shadow-sm rounded text-center h-100">
                            <img src="{{ $membership['image'] ?? $defaultImage }}" alt="{{ $membership['name'] }}"
                                class="membership-img mb-2 rounded-circle">

                            <p class="mb-0 fw-semibold small text-dark">{{ $membership['name'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- JS hover effect -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.membership-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => card.classList.add('shadow-lg'));
            card.addEventListener('mouseleave', () => card.classList.remove('shadow-lg'));
        });
    });
</script>
