@extends('front.master')
@section('content')

    @include('front.slider.index')
    <main id="main">
        @include('front.categories.index')
        @include('front.contact.index')
        @include('front.products.index')
        @include('front.partners.index')
        @if(!$abouts->isEmpty())
            @include('front.footer.index')
        @endif
    </main><!-- End #main -->

@endsection
