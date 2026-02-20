@extends('frontend.layouts.app')

@section('title', 'Contact Us')

<link rel="stylesheet" href="{{ asset('css/frontend/contact/custom_contact.css') }}">

@section('content')

    @include('frontend.welcome_page.header')

    <!-- Banner -->
    <div class="contact-banner" style="background-image: url('{{ asset('uploads/images/welcome_page/cover.png') }}');">
        <div class="contact-overlay"></div>
        <div class="contact-breadcrumb">
            <a href="{{ route('welcome') }}">Home</a>
            <span>></span>
            <span>Contact Us</span>
        </div>
    </div>

    <section class="contact-section">
        <div class="contact-container">

            <!-- Left: Appointment Form -->
            <div class="contact-form-wrapper">
                <h2 class="contact-title">Make an Appointment</h2>

                <form>

                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" placeholder="Phone">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" placeholder="Subject">
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea rows="5" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" class="contact-btn">
                        Send Appointment Request
                    </button>

                </form>
            </div>

            <!-- Right: Contact Info -->
            <div class="contact-info-wrapper">

                <h3>Contact Information</h3>

                <div class="info-item">
                    <strong>Hospital</strong>
                    <p>Dr. Fazlul Haque Colorectal Hospital</p>
                </div>

                <div class="info-item">
                    <strong>Phone</strong>
                    <p>0241023155</p>
                </div>

                <div class="info-item">
                    <strong>Email</strong>
                    <p>asifh7000@gmail.com</p>
                </div>

                <div class="info-item">
                    <strong>Hospital Hours</strong>
                    <p>Saturday – Thursday: 5PM – 9PM</p>
                    <p class="closed-day">Friday: Closed</p>
                </div>

            </div>

        </div>
    </section>

    @include('frontend.welcome_page.footer')

@endsection
