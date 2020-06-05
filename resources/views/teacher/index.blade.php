@extends('teacher.layouts.master')

@section('title')

Teacher Area

@stop

@section('content')
<div class="container text-center content w-100">
<div class="row justify-content-around">
    <div class="col-md-3 py-3 text-md-right m-3 statistic-cadre cadre-one">
        <div class="row m-auto">
            <div class="col-md-4 m-auto">
               <h3>
                <i class="fas fa-book"></i>
               </h3>
            </div>
            <div class="col-md-8 text-sm-center text-md-right">
            <div class="w-100 title">مجموع الدروس</div>
            <div class="w-100 value">200</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 py-3 text-md-right m-3 statistic-cadre cadre-two">
        <div class="row w-100">
            <div class="col-md-4 text-center m-auto">
               <h3>
                <i class="fas fa-diagnoses"></i>
               </h3>
            </div>
            <div class="col-md-8 text-sm-center text-md-right">
            <div class="w-100 title">مجموع الامتحانات</div>
            <div class="w-100 value">200</div>
            </div>
        </div>
    </div>
    <div class="col-md-3 py-3 text-md-right m-3 statistic-cadre cadre-three">
        <div class="row w-100">
            <div class="col-md-4 text-center m-auto">
               <h3>
<i class="fas fa-download    "></i>
            </h3>
            </div>
            <div class="col-md-8 text-sm-center text-md-right">
            <div class="w-100 title">مجموع التحميلات</div>
            <div class="w-100 value">200</div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-around mt-4">
    <div class="col-md-6 border p-0 m-2 align-self-start">
        <div class="card">
            <div class="card-header row m-0 w-100 px-0 bg-warning">
                <div class="col-md-10 text-right">
                    آخر الرسائل
                </div>
                <div class="col-md-2 text-left">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </div>
            </div>
            <div class="card-body p-0">
                <a href="" class="btn m-0 p-0 w-100">
                    <div class=" row  p-3 m-0">
                        <div class="col-2 p-0">12 mai</div>
                        <div class="col-8">مرحبا بك | تلمساني عبد القادر</div>
                        <div class="col-2">
                            <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
                <hr class="p-0 m-0"/>
                <a href="" class="btn m-0 p-0 w-100">
                    <div class="row p-3 m-0">
                        <div class="col-2 p-0">12:11</div>
                        <div class="col-8">مرحبا بك | تلمساني عبد القادر</div>
                        <div class="col-2">
                            <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
                <hr class="p-0 m-0"/>
                <a href="" class="btn m-0 p-0 w-100">
                    <div class="row p-3 m-0">
                        <div class="col-2 p-0">12:11</div>
                        <div class="col-8">مرحبا بك | تلمساني عبد القادر</div>
                        <div class="col-2">
                            <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
                <hr class="p-0 m-0"/>
                <a href="" class="btn m-0 p-0 w-100">
                    <div class="row p-3 m-0">
                        <div class="col-2 p-0">12:11</div>
                        <div class="col-8">مرحبا بك | تلمساني عبد القادر</div>
                        <div class="col-2">
                            <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
                
                
            </div>
        </div>
    </div>
    <div class="col-md-5 border p-0 m-2 align-self-start">
        <div class="card-header row m-0 w-100 px-0 bg-info">
            <div class="col-md-10 text-right">
                آخر الاشعارات
            </div>
            <div class="col-md-2  text-left">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card-body m-0 p-0">
                <a href="" class="btn m-0 p-0 w-100">
                    <div class="row p-3 m-0">
                        <div class="col-2 p-0">12:11</div>
                        <div class="col-8">قام زائر بتقييم ملفك</div>
                        <div class="col-2">
                            <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
                <hr class="p-0 m-0"/>
                <a href="" class="btn m-0 p-0 w-100">
                    <div class="row p-3 m-0">
                        <div class="col-2 p-0">12:11</div>
                        <div class="col-8">قام زائر بالتعليق على منشورك</div>
                        <div class="col-2">
                            <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
        </div>
    </div>
</div>
</div>
@endsection