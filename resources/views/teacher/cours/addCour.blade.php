@extends('teacher.layouts.master')

@section('title')

add cour

@endsection

@section('content')
<div class="container text-center">
    <h4 class="my-3">{{$label}} درس </h4>
    <div>
       <form action="" method="post" class="row w-75 m-auto text-right">
        <div class="form-group col-12">
          <label for="cour_title">عنوان الدرس</label>
          <input type="text" class="form-control" name="cour_title" id="cour_title" aria-describedby="cour_title" placeholder="ادخل عنوانا للدرس">
          <small id="cour_title" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group col-md-6">
          <label for="year">السنة</label>
          <select class="form-control" name="year" id="year">
            <option selected>الأولى ثانوي</option>
            <option>الثانية ثانوي</option>
            <option>الثالثة ثانوي</option>
          </select>
        </div>
        <div class="form-group col-md-6">
            <label for="field">التخصص</label>
            <select class="form-control" name="field" id="field">
              <option>جذع مشترك علوم و تكنولوجيا</option>
              <option>جذع مشترك آداب</option>
            </select>
          </div>
        <div class="form-group col-12">
          <label for="cour_desc">نبذة عن الدرس</label>
          <textarea class="form-control" name="cour_desc" id="cour_desc" rows="5"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="cour_pic">صورة الدرس</label>
            <input type="file" class="form-control-file" name="cour_pic" id="cour_pic" placeholder="اضافة صورة للدرس" aria-describedby="cour_pic">
            <small id="cour_pic" class="form-text text-muted">يمكن وضع صورة اختيارية كغلاف للدرس</small>
          </div>
          <div class="form-group col-md-6">
            <label for="cour_file">ملف الدرس</label>
            <input type="file"  class="form-control-file" name="cour_file" id="cour_file" placeholder="اضافة ملف الدرس">
          </div>
          <button type="submit" class="btn btn-success m-auto">{{$label}}</button>
       </form>
    </div>
</div>
@endsection

@section('scripts')

@endsection