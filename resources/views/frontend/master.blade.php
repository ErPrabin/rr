<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title', config('app.name'))</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    @yield('meta')
    <meta name="author" content="{{ config('app.name') }}" />
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('static/logo.png') }}" />
    {{-- <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CKalam:300,400,700"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/fonts.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"> --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    @include('frontend.partials.css')
</head>

<body>
    @include('frontend.partials.preloader')

    <div class="page">
        {{-- @include('frontend.partials.master-header') --}}
        @yield('content')

        <!-- Messenger Chat Plugin Code -->
        <div id="fb-root"></div>

        <!-- Your Chat Plugin code -->
        <div id="fb-customer-chat" class="fb-customerchat"></div>

        @include('frontend.partials.footer')

        @include('frontend.partials.script')
        
    </div>
</body>

</html>