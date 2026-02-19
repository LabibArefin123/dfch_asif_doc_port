@extends('frontend.layouts.app')

@section('title', 'Irritable Bowel Syndrome (IBS)')
<link rel="stylesheet" href="{{ asset('css/frontend/about/custom_about.css') }}">

@section('content')

    @include('frontend.welcome_page.header')

    <!-- Banner -->
    <div class="doctor-banner" style="background-image: url('{{ asset('uploads/images/welcome_page/cover.png') }}');">
        <nav class="breadcrumb-custom">
            <a href="{{ route('welcome') }}" class="doc-link text-decoration-none">Home</a>
            <span>></span>
            <a href="{{ route('ibs') }}" class="doc-link text-decoration-none">IBS</a>
        </nav>
    </div>

    <section class="condition-profile">
        <div class="doctor-card">
            <div class="row">

                <!-- Left Column -->
                <div class="col-lg-8 col-md-12 condition-content" data-aos="fade-up">
                    <h2 class="doctor-name">Irritable Bowel Syndrome (IBS)</h2>

                    <p>
                        Irritable Bowel Syndrome (IBS) is a common functional disorder affecting the large intestine.
                        It is not life-threatening but can significantly impact quality of life.
                        IBS is characterized by abdominal discomfort or pain along with changes in bowel habits.
                    </p>

                    <h5 class="section-title mt-3">Who is at Risk?</h5>
                    <ul class="expertise-list">
                        <li>Women are more likely to be affected than men</li>
                        <li>People under 50 years of age</li>
                        <li>Those with a family history of IBS</li>
                        <li>History of intestinal infections</li>
                        <li>High levels of stress or anxiety</li>
                    </ul>

                    <h5 class="section-title mt-3">Symptoms</h5>
                    <ul class="expertise-list">
                        <li>Abdominal pain or cramping</li>
                        <li>Bloating and gas</li>
                        <li>Diarrhea, constipation, or alternating both</li>
                        <li>Mucus in stool</li>
                        <li>Urgency to pass stool</li>
                    </ul>

                    <h5 class="section-title mt-3">Diagnosis</h5>
                    <ul class="expertise-list">
                        <li>Detailed medical history and symptom evaluation</li>
                        <li>Physical examination</li>
                        <li>Rule out other conditions with blood tests, stool tests, or colonoscopy if needed</li>
                    </ul>

                    <h5 class="section-title mt-3">Treatment & Management</h5>
                    <ul class="expertise-list">
                        <li><strong>Dietary changes:</strong> High-fiber diet, avoid trigger foods like caffeine, spicy
                            foods, and fatty foods</li>
                        <li><strong>Hydration:</strong> Drink plenty of water daily</li>
                        <li><strong>Medications:</strong> Anti-spasmodics, laxatives, anti-diarrheal medications as needed
                        </li>
                        <li><strong>Stress management:</strong> Yoga, meditation, counseling</li>
                        <li><strong>Probiotics:</strong> May help improve gut health</li>
                    </ul>

                    <h5 class="section-title mt-3">Living with IBS</h5>
                    <p>
                        While IBS cannot be cured completely, symptoms can be managed with lifestyle changes,
                        diet modifications, and proper guidance from a gastroenterologist.
                        Keeping a symptom diary and identifying triggers can greatly improve day-to-day comfort.
                    </p>
                </div>

                <!-- Right Column (Optional Image) -->
                {{-- <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-start mt-4 mt-lg-0"
                    data-aos="fade-left">
                    <div class="doctor-image">
                        <img src="{{ asset('uploads/images/welcome_page/conditions/ibs.jpg') }}" alt="IBS Image"
                            class="img-fluid rounded shadow-sm">
                    </div>
                </div> --}}

            </div>
        </div>
    </section>

    @include('frontend.welcome_page.footer')

@endsection
