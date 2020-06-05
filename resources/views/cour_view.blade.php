@extends('layouts.master')

@section('head-content')
<link rel="stylesheet" href=" {{ asset('owlcarousel/owl.carousel.min.css') }} ">
<link rel="stylesheet" href=" {{ asset('owlcarousel/owl.theme.default.min.css') }} ">
@stop

@section('title')
{{ $slug}}
@endsection

@section('content')
    <div class="container text-center">
        <div class="row my-4 text-secondary">
            <a href="" class="text-secondary">الرئيسية</a>
            <span class="mx-1" >></span>
            <a href="" class="text-secondary">جذع مشترك علوم و تكنولوجيا</a>
            <span class="mx-1">></span>
            <a href="" class="text-secondary">رياضيات</a>
            <span class="mx-1">></span>
            <a href="" class="text-secondary">الدرس الأول</a>
        </div>
<div class="row my-3">
    <div class="col-md-3">
        <img src=" {{asset('images/fields/pdf.jpg')}} " width="200px" height="200px" alt="" srcset="">
    </div>
    <div class=" col-md-6 my-auto" >
        
        <div class="border border-secondary">
            <div class="row w-100">
                <div class="col-md-5 p-1 border-left border-secondary">
                    اسم الملف
                </div>
                <div class="col-md-6 p-1">
                    {{ $slug}}
                </div>
            </div>
            <div class="row w-100">
                <div class="col-md-5 p-1 border-left border-secondary">
                   تاريخ النشر
                </div>
                <div class="col-md-6 p-1">
                    12-12-2019
                </div>
            </div>

            <div class="row w-100">
                <div class="col-md-5 p-1 border-left border-secondary">
                   اسم الناشر
                </div>
                <div class="col-md-6 p-1">
                    تلمساني عبد القادر
                </div>
            </div>
            <div class="row w-100">
                <div class="col-md-5 p-1 border-left border-secondary">
                   صيغة الملف
                </div>
                <div class="col-md-6 p-1">
                    ملف pdf
                </div>
            </div>
            <div class="row w-100">
                <div class="col-md-5 p-1 border-left border-secondary">
                   حجم الملف
                </div>
                <div class="col-md-6 p-1">
                    20 ko
                </div>
            </div>
            <div class="row w-100">
                <div class="col-md-5 p-1 border-left border-secondary">
                   عدد التحميلات
                </div>
                <div class="col-md-6 p-1">
                    230
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <h4 class="w-100">
        معاينة الملف
    </h4>
    <div class="row bg-secondary m-auto position-relative border-bottom border-secondary" style="width:650px;height:500px;overflow:auto;" dir='ltr'>
        <div class="position-sticky fixed-top bg-dark mx-auto my-1 text-light p-2" dir="rtl">
            <span class="btn text-light" id="prev">السابق</span>|
            <span class="p-2">الصفحة: <span id="page_num"></span> / <span id="page_count"></span></span>|
            <span class="btn text-light" id="next">التالي</span>
        </div>
        <canvas id="pdfViewer" class="col-md-12 mx-auto my-3"></canvas>
    </div>
</div>
<div class="row text-center w-100">
    <button type="button" class="btn btn-outline-primary mx-auto my-3">تحميل الملف</button>
</div>
</div>
@endsection

@section('scripts')
<script src=" {{asset('pdfJs/pdf.js')}} "></script>
<script src=" {{asset('pdfJs/pdf.worker.js')}} "></script>
<script>
    var url = "{!! asset('files/cours/test.pdf') !!}";
</script>
<script src=" {{asset('pdfJs/custom.js')}} "></script>
@endsection