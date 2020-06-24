<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/subAdmin.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <title>
        {{ config('app.name') }} - @yield('title')
    </title>
    @yield('head-content')
</head>
<body dir="rtl">
<div class="row m-0">
    @include('admin.layouts.sidbar')
 <div class="col-md-9 p-0" id="content">
    @include('admin.layouts.header')
    @yield('content')
</div>
</div>


@include('admin.layouts.footer')

<script src="{{asset('jquery/jquery-3.5.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{asset('customJs/sidebar.js')}}"></script>
@yield('scripts')
</body>
</html>