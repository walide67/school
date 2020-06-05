@extends('subAdmin.layouts.master')

@section('title')

Personal Informations

@endsection

@section('head-content')
<link rel="stylesheet" href="{{ asset('multiselect/css/bootstrap-multiselect.css') }}">
@endsection

@section('content')

<div class="container text-center">
    <h4 class="my-3">معلومات المؤسسة</h4>
</div>
<div class="my-3 border w-75 m-auto p-3">
    <form action="" method="post" class="text-center" >
        <div class="form-row text-right">
            <div class="form-group col-md-6">
              <label for="school_name">اسم المؤسسة</label>
              <input type="text" class="form-control" name="school_name" id="school_name" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="school_photo">صورة المؤسسة</label>
                <input type="file" class="form-control-file" name="school_photo" id="school_photo" placeholder="" aria-describedby="fileHelpId">
            </div>
        </div>
            <div class="form-row text-right">
                <div class="form-group col-md-6">
                     <label for="wilaya">الولاية</label>
                     <select class="form-control py-1" name="wilaya" id="wilaya">
                       <option>الجزائر</option>
                       <option>الشلف</option>
                       <option>تيبازة</option>
                     </select>
                </div>
            
                <div class="form-group col-md-6">
                    <label for="commune">البلدية</label>
                    <select class="form-control py-1" name="commune" id="commune">
                      <option>الشلف</option>
                      <option>تاجنة</option>
                      <option>تنس</option>
                    </select>
               </div>
            </div>
            <button type="submit" class="btn btn-success m-auto">حفط</button>
    </form>
</div>

@endsection

@section('scripts')

@endsection