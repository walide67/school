@extends('subAdmin.layouts.master')

@section('title')
add annonce
@endsection

@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة اعلان </h4>
    <div>
       <form action="" method="post" class="row w-75 m-auto text-right">
        <div class="form-group col-12">
          <label for="annonce_title">عنوان الاعلان</label>
          <input type="text" class="form-control" name="annonce_title" id="annonce_title" placeholder="ادخل عنوانا للاعلان">
        </div>
        <div class="form-group col-12">
          <label for="cour_desc">محتوى الاعلان</label>
          <textarea class="form-control" name="cour_desc" id="cour_desc" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="annonce_pic">صورة الاعلان</label>
            <input type="file" class="form-control-file" name="annonce_pic" id="annonce_pic" placeholder="اضافة صورة للاعلان" aria-describedby="annonce_pic_helper">
            <small id="annonce_pic_helper" class="form-text text-muted">يمكن وضع صورة اختيارية كغلاف للاعلان</small>
          </div>
          <button type="submit" class="btn btn-success m-auto">اضافة</button>
       </form>
    </div>
</div>
@endsection

@section('scripts')

@endsection