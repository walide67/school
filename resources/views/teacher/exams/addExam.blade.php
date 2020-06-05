@extends('teacher.layouts.master')

@section('title')

Add Exam

@endsection

@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة امتحان</h4>
    <div>
       <form action="" method="post" class="row w-75 m-auto text-right">
        <div class="form-group col-12">
          <label for="exam_title">عنوان الامتحان</label>
          <input type="text" class="form-control" name="exam_title" id="exam_title" aria-describedby="cour_title" placeholder="ادخل عنوانا للامتحان">
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
          <label for="exam_desc">نبذة عن الامتحان</label>
          <textarea class="form-control" name="exam_desc" id="exam_desc" rows="5"></textarea>
        </div>
        <div class="form-group col-md-6">
            <label for="exam_pic">صورة الامتحان</label>
            <input type="file" class="form-control-file" name="exam_pic" id="exam_pic" placeholder="اضافة صورة للامتحان" aria-describedby="exam_pic_helper">
            <small id="exam_pic_helper" class="form-text text-muted">يمكن وضع صورة اختيارية كغلاف للامتحان</small>
          </div>
          <div class="form-group col-md-6">
            <label for="exam_file">ملف الامتحان</label>
            <input type="file"  class="form-control-file" name="exam_file" id="exam_file" placeholder="اضافة ملف الامتحان">
          </div>
          <button type="submit" class="btn btn-success m-auto">اضافة</button>
       </form>
    </div>
</div>
@endsection

@section('scripts')

@endsection