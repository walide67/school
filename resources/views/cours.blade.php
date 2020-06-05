@extends('layouts.master')

@section('head-content')
<link rel="stylesheet" href=" {{ asset('owlcarousel/owl.carousel.min.css') }} ">
<link rel="stylesheet" href=" {{ asset('owlcarousel/owl.theme.default.min.css') }} ">
@stop

@section('title')

Cours

@endsection

@section('content')

<div class="row d-flex justify-content-around">
<div class=" col-md-3 text-center">
    <h4>التخصصات</h4>
    <div id="accordion">
        <div class="card">
          <div class="card-header btn" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h6 class="my-2 text-primary"> 
                جذع مشترك علوم و تكنولوجيا
            </h6>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <ul>
                    <li>
                        <button class="btn text-primary collapsed">
                           1 جذع مشترك آداب
                          </button>
                    </li>
                    <hr />
                    <li>
                        <button class="btn text-primary collapsed">
                           2 جذع مشترك آداب
                          </button>
                    </li>
                    <hr />
                    <li>
                        <button class="btn text-primary collapsed">
                           3 جذع مشترك آداب
                          </button>
                    </li>
                </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header btn collapsed" id="headingTwo"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h5 class="mb-0">
              <button class="btn text-primary">
                جذع مشترك آداب
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <ul>
                    <li>
                        <button class="btn text-primary collapsed" >
                           1 جذع مشترك آداب
                          </button>
                    </li>
                    <hr />
                    <li>
                        <button class="btn text-primary collapsed">
                           2 جذع مشترك آداب
                          </button>
                    </li>
                    <hr />
                    <li>
                        <button class="btn text-primary collapsed">
                           3 جذع مشترك آداب
                          </button>
                    </li>
                </ul>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="col-md-8">
    <div class="row text-center">
        <h4 class="w-100">دروس</h4>
            <a href=" {{route('cour-detaills', 'كتاب-المتميز-في-الرياضيات')}} " class="card text-center col-md-3 item-cour m-2" >
                <div>
                    <img src="images/fields/pdf.jpg" alt="" srcset="">
                </div>
            <div class="card-body">
            <h6 class="card-title">الدرس الأول</h6>
            </div>
        </a>
        <a href="#" class="card text-center col-md-3 item-cour m-2" >
            <div>
                <img src="images/fields/pdf.jpg" alt="" srcset="">
            </div>
        <div class="card-body">
        <h6 class="card-title">الدرس الأول</h6>
        </div>
    </a>
    <a href="#" class="card text-center col-md-3 item-cour m-2" >
        <div>
            <img src="images/fields/pdf.jpg" alt="" srcset="">
        </div>
    <div class="card-body">
    <h6 class="card-title">الدرس الأول</h6>
    </div>
</a>
<a href="#" class="card text-center col-md-3 item-cour m-2" >
    <div>
        <img src="images/fields/pdf.jpg" alt="" srcset="">
    </div>
<div class="card-body">
<h6 class="card-title">الدرس الأول</h6>
</div>
</a>
        
    </div>
    <div class="row text-center">
        <h4 class="w-100">فروض و امتحانات</h4>
        <a href="#" class="card text-center col-md-3 item-cour m-2" >
            <div>
                <img src="images/fields/pdf.jpg" alt="" srcset="">
            </div>
        <div class="card-body">
        <h6 class="card-title">الدرس الأول</h6>
        </div>
        </a>
        <a href="#" class="card text-center col-md-3 item-cour m-2" >
            <div>
                <img src="images/fields/pdf.jpg" alt="" srcset="">
            </div>
        <div class="card-body">
        <h6 class="card-title">الدرس الأول</h6>
        </div>
        </a>
        <a href="#" class="card text-center col-md-3 item-cour m-2" >
            <div>
                <img src="images/fields/pdf.jpg" alt="" srcset="">
            </div>
        <div class="card-body">
        <h6 class="card-title">الدرس الأول</h6>
        </div>
        </a>
        <a href="#" class="card text-center col-md-3 item-cour m-2" >
            <div>
                <img src="images/fields/pdf.jpg" alt="" srcset="">
            </div>
        <div class="card-body">
        <h6 class="card-title">الدرس الأول</h6>
        </div>
        </a>
    </div>
    <section class="fields-section">
        <h4 class="w-100 text-center">آخر الاضافات</h4>
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php $array = [
                    'جذع مشترك علوم و تكنولوجيا' => 'images/fields/sciences.jpg',
                    'جذع مشترك آداب' => 'images/fields/literator.jpg',
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
        </div>
    </section>
</div>
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
            nav:false
        },
        480:{
            items:1,
            nav:false
        },
        780:{
            items:3,
            nav:false,
            loop:true
        }
    }
});
});
</script>
@endsection