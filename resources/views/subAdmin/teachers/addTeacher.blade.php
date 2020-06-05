@extends('subAdmin.layouts.master')

@section('title')

add cour

@endsection

@section('head-content')
<link rel="stylesheet" href="{{ asset('multiselect/css/bootstrap-multiselect.css') }}">
@endsection

@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة أستاذ</h4>
    <div class="w-75 m-auto">
      <form action="" method="post" class="text-center" >
        <div class="form-row text-right">
            <div class="form-group col-md-6">
              <label for="user_fname">الاسم</label>
              <input type="text" class="form-control" name="user_fname" id="user_fname" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="user_lname">اللقب</label>
                <input type="text" class="form-control" name="user_lname" id="user_lname" placeholder="">
            </div>
        </div>
        <div class="form-row text-right">
          <div class="form-group col-md-6">
            <label for="teacher_email">البريد الالكتروني</label>
            <input type="email" class="form-control" name="teacher_email" id="teacher_email" placeholder="">
          </div>
          <div class="form-group col-md-6">
              <label for="teacher_password">كلمة المرور</label>
              <input type="password" class="form-control" name="teacher_password" id="teacher_password" placeholder="">
          </div>
      </div>
            <div class="form-row text-right">
                <div class="form-group col-md-6">
                   <div class="form-group">
                     <label for="field">التخصصات</label>
                     <select dir="rtl" class="form-control" name="field" id="field" multiple>
                       <optgroup label="الاولى ثانوي">
                        <option>الاولى ثانوي جذع مشنرك آداب</option>
                        <option>الاولى ثانوي جذع مشنرك علوم و تكنولوجيا</option>
                       </optgroup>
                       <optgroup label="الثانية ثانوي">
                        <option>الثانية ثانوي رياضيات</option>
                        <option>الثانية ثانوي تقني رياضي</option>
                       </optgroup>
                     </select>
                   </div>
                </div>
            <div class="form-group col-md-6">
                <label for="user_photo">الصورة الشخصية</label>
                <input type="file" class="form-control-file" name="user_photo" id="user_photo" placeholder="" aria-describedby="fileHelpId">
              </div>
            </div>
            <button type="submit" class="btn btn-success m-auto">حفط</button>
    </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('multiselect/js/bootstrap-multiselect.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#field').multiselect({
            buttonWidth: '100%',
            optionClass: function(){
                return 'mr-0'
            },
            buttonClass:'btn btn-default border',
            buttonText: function(options, select) {
                if (options.length === 0) {
                    return 'لم يتم الاختيار';
                }
                else if (options.length > 3) {
                    return 'تم اختيار أكثر من ثلاثة';
                }
                 else {
                     var labels = [];
                     options.each(function() {
                         if ($(this).attr('label') !== undefined) {
                             labels.push($(this).attr('label'));
                         }
                         else {
                             labels.push($(this).html());
                         }
                     });
                     return labels.join(', ') + '';
                 }
            }
        });
    });
</script>
@endsection