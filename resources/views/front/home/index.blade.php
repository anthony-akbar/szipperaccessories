@extends('front.master')
@section('content')

    @include('front.slider.index')

    <!-- Start #main -->
    <main id="main">
        @include('front.categories.index')

        @include('front.contact.index')

        @include('front.products.index')

        @include('front.partners.index')

    </main>
    <!-- End #main -->

@endsection
