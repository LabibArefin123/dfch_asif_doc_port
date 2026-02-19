@extends('frontend.layouts.app')

@section('title', 'Dr. Asif Almas Haque')
<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

@section('content')
    @include('frontend.welcome_page.header')
    @include('frontend.welcome_page.banner')
    @include('frontend.welcome_page.publications')
    @include('frontend.welcome_page.membership')
    @include('frontend.welcome_page.achievement')
    @include('frontend.welcome_page.footer')
@endsection
