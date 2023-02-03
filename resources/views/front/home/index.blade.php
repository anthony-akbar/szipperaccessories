@extends('front.master')
@section('content')

    @include('front.slider.index')

    <main id="main">
        @include('front.categories.index')

        @include('front.contact.index')

        @include('front.products.homeindex')

        @include('front.partners.index')

    </main><!-- End #main -->

@endsection
