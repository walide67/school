@extends('layouts.master')
@section('head-content')
<link rel="stylesheet" href=" {{ asset('owlcarousel/owl.carousel.min.css') }} ">
<link rel="stylesheet" href=" {{ asset('owlcarousel/owl.theme.default.min.css') }} ">
@stop
@section('title')
    home
@endsection
@section('content')
<div class="container">
  <div class="row main-slider">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img class=" w-100" src="https://scontent-mrs2-2.xx.fbcdn.net/v/t1.0-9/86174352_3039053976118786_5448131681007435776_n.jpg?_nc_cat=102&_nc_sid=110474&_nc_ohc=Xgw8lgUPyoQAX99Ojy2&_nc_ht=scontent-mrs2-2.xx&oh=ade5723af0f1a8e346bfa0c23f90be6e&oe=5EF91E88" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image title</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aliquid odio, excepturi expedita sint similique numquam delectus! Eaque amet, facilis quidem deserunt adipisci neque voluptates odit dignissimos corporis quas magni.</p>
              </div>
        </div>
          <div class="carousel-item">
            <img class=" w-100" src="https://scontent-mrs2-2.xx.fbcdn.net/v/t1.0-9/83579864_3039055886118595_1562906983760134144_n.jpg?_nc_cat=107&_nc_sid=110474&_nc_ohc=FvYNVq6y-GAAX8pPtsm&_nc_ht=scontent-mrs2-2.xx&oh=6767a5b111b480a66daa8aa76e56e702&oe=5EF8E891" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image title</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aliquid odio, excepturi expedita sint similique numquam delectus! Eaque amet, facilis quidem deserunt adipisci neque voluptates odit dignissimos corporis quas magni.</p>
              </div>
        </div>
          <div class="carousel-item">
            <img class=" w-100" src="https://scontent-mrs2-2.xx.fbcdn.net/v/t1.0-9/86178037_3039057809451736_5419527555298361344_n.jpg?_nc_cat=106&_nc_sid=110474&_nc_ohc=88WF_kDc-ysAX8l_QPO&_nc_ht=scontent-mrs2-2.xx&oh=1d74deb480bb7052f3addb0e96aa029d&oe=5EF7CFDA" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image title</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aliquid odio, excepturi expedita sint similique numquam delectus! Eaque amet, facilis quidem deserunt adipisci neque voluptates odit dignissimos corporis quas magni.</p>
              </div>
        </div>
        </div>
      </div>
</div>
<section id="cours" class="my-3 cours">
    <div class="row text-center">
        <h2 class="w-100">
            دروس و امتحانات
        </h2>
    </div>
    <div class="row d-flex justify-content-around">
        <a href=" {{ route('cours') }} " class="card col-md-3 text-center hvr-underline-from-center">
            <div class="cours-item-image">
                <img src=" {{ asset('images/home/1as.jpg') }} " alt="" srcset="">
            </div>
            <div class="card-body">
              <h5 class="card-title">الأولى ثانوي</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </a>
          <a href="#" class="card col-md-3 text-center hvr-underline-from-center" >
            <div class="cours-item-image">
                <img src=" {{ asset('images/home/2as.jpg') }} " alt="" srcset="">                    
            </div>
            <div class="card-body">
              <h5 class="card-title">الثانية ثانوي</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </a>

          <a href="#" class="card col-md-3 text-center hvr-underline-from-center" >
            <div class="cours-item-image">
                <img src=" {{ asset('images/home/3as.jpg') }} " alt="" srcset="">                    
            </div>
            <div class="card-body">
              <h5 class="card-title">الثالثة ثانوي</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </a>
    </div>
</section>
<section class="fields-section text-center">
<h2 class="w-100">
التخصصات
</h2>
<div class="owl-carousel owl-theme">
<?php $array = [
'الرياضيات' => 'images/fields/math.jpg',
'العلوم الفيزيائية' => 'images/fields/physics.jpg',
'علوم الطبيعة و الحياة' => 'images/fields/science.png',
'اللغة العربية' => 'images/fields/arab.jpg',
'اللغة الفرنسية' => 'images/fields/frensh.jpeg',
'اللغة الانجليزية' => 'images/fields/english.png',
'التربية الاسلامية' => 'images/fields/islamic.png',
'التاريخ' => 'images/fields/history.png',
'الجغرافيا' => 'images/fields/geo.jpg',
'التربية البدنية' => 'images/fields/sport.jpg',
'التربية الموسيقية' => 'images/fields/music.jpg',
'الفلسفة' => 'images/fields/philo.jpg',
'التربية التشكيلية' => 'images/fields/paint.jpg',
] ?>
@foreach($array as $key => $value)
<div class="item">
<a href="#" class="card text-center p-2" >
        <img src=" {{ asset($value) }} " alt="" srcset="">                    
    <div class="card-body">
    <h6 class="card-title">{{ $key }}</h6>
    </div>
</a>
</div>
@endforeach

</div>

</section>

</div>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('owlcarousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript"> 
$(document).ready(function(){
  $(".owl-carousel").owlCarousel(
    {
    loop:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        480:{
            items:3,
            nav:true
        },
        780:{
            items:5,
            nav:true,
            loop:true
        }
    }
});
});
</script>
@endsection

