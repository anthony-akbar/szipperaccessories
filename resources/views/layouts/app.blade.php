<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="" rel="shortcut icon">
    <link rel="stylesheet" href="{{ asset('admins/css/app2.css') }}"/>
    <link rel="icon" type="image/icon" href="/svgexport-13.svg">
    <title>Royal</title>
    @yield('styles')
</head>
<body>
@yield('content')
<scripts src="{{asset('admins/js/enigma.js')}}"></scripts>
@yield('scripts')
</body>
</html>
