@extends('frontend.layouts.app')

@section('title', 'Frequently Asked Questions')

<link rel="stylesheet" href="{{ asset('css/frontend/faq/custom_faq.css') }}">

@section('content')

    @include('frontend.welcome_page.header')

    <!-- Banner -->
    <div class="doctor-banner" style="background-image: url('{{ asset('uploads/images/welcome_page/cover.png') }}');">
        <nav class="breadcrumb-custom">
            <a href="{{ route('welcome') }}" class="doc-link text-decoration-none">Home</a>
            <span>></span>
            <a href="{{ route('faq') }}" class="doc-link text-decoration-none">FAQ</a>
        </nav>
    </div>

    <section class="doctor-profile">
        <div class="doctor-card">

            <h2 class="doctor-name text-center mb-5">
                Frequently Asked Questions
            </h2>

            <div class="faq-container">

                <!-- FAQ Item -->
                <div class="faq-item">
                    <div class="faq-question">
                        What conditions do you commonly treat?
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        I commonly treat colorectal conditions including piles, fissure, fistula,
                        colorectal cancer, pilonidal sinus, obstructed defecation syndrome,
                        and other anorectal disorders using modern surgical techniques.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you perform laparoscopic or minimally invasive surgery?
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        Yes. I regularly perform laparoscopic and minimally invasive colorectal
                        procedures to ensure faster recovery, reduced pain, and minimal scarring.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Is laser surgery available for piles and fistula?
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        Yes. Laser surgery is available for selected cases of piles and fistula.
                        Treatment suitability is determined after detailed evaluation.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        How can I book an appointment?
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        You can book an appointment through the website’s booking section
                        or by contacting the chamber directly via phone.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        Do you treat colorectal cancer?
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        Yes. I perform advanced colorectal cancer surgeries and follow
                        multidisciplinary treatment approaches for optimal patient outcomes.
                    </div>
                </div>

            </div>

        </div>
    </section>

    @include('frontend.welcome_page.footer')

    <!-- FAQ JavaScript -->
    <script>
        document.querySelectorAll(".faq-question").forEach(item => {
            item.addEventListener("click", function() {
                const parent = this.parentElement;
                const answer = parent.querySelector(".faq-answer");
                const icon = this.querySelector(".faq-icon");

                // Close other items
                document.querySelectorAll(".faq-item").forEach(faq => {
                    if (faq !== parent) {
                        faq.classList.remove("active");
                        faq.querySelector(".faq-answer").style.maxHeight = null;
                        faq.querySelector(".faq-icon").textContent = "+";
                    }
                });

                // Toggle current
                parent.classList.toggle("active");

                if (parent.classList.contains("active")) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    icon.textContent = "–";
                } else {
                    answer.style.maxHeight = null;
                    icon.textContent = "+";
                }
            });
        });
    </script>

@endsection
