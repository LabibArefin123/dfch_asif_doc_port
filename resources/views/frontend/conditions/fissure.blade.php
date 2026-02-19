@extends('frontend.layouts.app')

@section('title', 'Anal Fissure')
<link rel="stylesheet" href="{{ asset('css/frontend/about/custom_about.css') }}">

@section('content')

    @include('frontend.welcome_page.header')

    <!-- Banner -->
    <div class="doctor-banner" style="background-image: url('{{ asset('uploads/images/welcome_page/cover.png') }}');">
        <nav class="breadcrumb-custom">
            <a href="{{ route('welcome') }}" class="doc-link text-decoration-none">Home</a>
            <span>></span>
            <a href="{{ route('fissure') }}" class="doc-link text-decoration-none">Fissure</a>
        </nav>
    </div>

    <section class="condition-profile">
        <div class="doctor-card">
            <div class="row">

                <!-- Left Column -->
                <div class="col-lg-8 col-md-12 condition-content" data-aos="fade-up">
                    <h2 class="doctor-name">Anal Fissure</h2>

                    <p>
                        An anal fissure is a small tear in the lining of the anal canal. It often causes pain during bowel
                        movements and can sometimes lead to bleeding.
                        Fissures are very common and usually caused by passing hard or large stools.
                    </p>

                    <h5 class="section-title mt-3">Who is at Risk?</h5>
                    <ul class="expertise-list">
                        <li>Adults with chronic constipation</li>
                        <li>Individuals who strain during bowel movements</li>
                        <li>Those with chronic diarrhea</li>
                        <li>Women after childbirth</li>
                        <li>Individuals with poor dietary fiber intake</li>
                    </ul>

                    <h5 class="section-title mt-3">Symptoms</h5>
                    <ul class="expertise-list">
                        <li>Pain during and after bowel movements</li>
                        <li>Bright red blood on stool or toilet paper</li>
                        <li>Itching or irritation around the anus</li>
                        <li>Visible crack or tear at the anal opening</li>
                    </ul>

                    <h5 class="section-title mt-3">Diagnosis</h5>
                    <ul class="expertise-list">
                        <li>Physical examination by a colorectal surgeon</li>
                        <li>Proctoscopy if needed to rule out other conditions</li>
                    </ul>

                    <h5 class="section-title mt-3">Treatment</h5>
                    <ul class="expertise-list">
                        <li><strong>Conservative care:</strong> High-fiber diet, increased water intake, warm sitz baths
                        </li>
                        <li><strong>Medications:</strong> Topical ointments, stool softeners, pain relief creams</li>
                        <li><strong>Minimally invasive procedures:</strong> Botox injections or lateral internal
                            sphincterotomy for chronic fissures</li>
                    </ul>

                    <h5 class="section-title mt-3">Living with Anal Fissure</h5>
                    <p>
                        Most fissures heal with simple lifestyle modifications. Avoid straining during bowel movements,
                        maintain a balanced diet rich in fiber, and follow medical guidance. Persistent fissures should be
                        evaluated by a colorectal specialist for proper intervention.
                    </p>
                </div>

                <!-- Right Column (Optional Image) -->
                {{-- <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-start mt-4 mt-lg-0"
                    data-aos="fade-left">
                    <div class="doctor-image">
                        <img src="{{ asset('uploads/images/welcome_page/conditions/fissure.jpg') }}"
                            alt="Anal Fissure Image" class="img-fluid rounded shadow-sm">
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    @include('frontend.welcome_page.footer')

@endsection
