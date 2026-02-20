@extends('frontend.layouts.app')

@section('title', 'Membership')
<link rel="stylesheet" href="{{ asset('css/frontend/profile/page_4.css') }}">

@section('content')

    @include('frontend.welcome_page.header')

    <div class="doctor-banner" style="background-image: url('{{ asset('uploads/images/welcome_page/cover.png') }}');">
        <nav class="breadcrumb-custom">
            <a href="{{ route('welcome') }}" class="doc-link text-decoration-none">Home</a>
            <span>></span>
            <a href="{{ route('page_4') }}" class="doc-link text-decoration-none">Membership</a>
        </nav>
    </div>

    <section class="doctor-profile">
        <div class="doctor-card">
            <div class="row align-items-start">
                <div class="col-lg-8 col-md-7 doctor-content">
                    <h2 class="doctor-name">Membership</h2>

                    <!-- National Memberships -->
                    <h5 class="section-title mt-4">National</h5>
                    <ul class="member-list mt-2">
                        <li>Member of the Society of Surgeons of Bangladesh</li>
                        <li>Member of Society of Laparoscopic Surgeons of Bangladesh</li>
                        <li>Member of Bangladesh Society of Colon & Rectal Surgeons</li>
                    </ul>

                    <!-- International Memberships -->
                    <h5 class="section-title mt-4">International</h5>
                    <ul class="member-list mt-2">
                        <li>Member of Royal College of Surgeons of Edinburgh (MRCS)</li>
                        <li>Fellow of Royal College of Physicians & Surgeons of Glasgow (FRCS)</li>
                        <li>Fellow of American Society of Colon & Rectal Surgeons (FASCRS)</li>
                        <li>Fellow of American College of Surgeons (FACS)</li>
                        <li>Member of The Association of Coloproctology of Great Britain & Ireland</li>
                        <li>Member of European Society of Coloproctology</li>
                        <li>Life Member of Endoscopic & Laparoscopic Surgeons of Asia</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    @include('frontend.welcome_page.footer')

@endsection
