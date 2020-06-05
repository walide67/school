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
    @include('subAdmin.layouts.sidbar')
 <div class="col-md-9 p-0" id="content">
    @include('subAdmin.layouts.header')
    @yield('content')
</div>
</div>


@include('subAdmin.layouts.footer')

<script src="{{asset('jquery/jquery-3.5.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function(){  
        $('#show-sidbar').click(function(){
            $("#sidbar").toggleClass("col-sm-1");  
            $("#sidbar").toggleClass("col-md-3");  
            $("#content").toggleClass("col-md-9");  
            $("#content").toggleClass("col-sm-11");
            $('.sidbar .label').toggle();
            $(this).find('i').toggleClass("fa-chevron-right fa-chevron-left");
            var avatar_width = $('.sidbar .sidbar-header .header-content .avatar').width() == 70 ?
            150: 70;
            $('.sidbar .sidbar-header .header-content .avatar').width(avatar_width);
            $('.sidbar .sidbar-header .header-content .avatar').height(avatar_width);
    });

    
}); 
</script>
@yield('scripts')
</body>
</html>