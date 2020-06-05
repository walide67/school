@extends('subAdmin.layouts.master')

@section('title')

add Class

@endsection

@section('head-content')
<link rel="stylesheet" href="{{ asset('multiselect/css/bootstrap-multiselect.css') }}">
@endsection

@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة قسم</h4>
    <div class="w-75 m-auto">
      <form action="" method="post" class="text-center" >
        <div class="form-row text-right">
            <div class="form-group col-md-6">
                <label for="year">السنة</label>
                <select class="form-control py-1" name="year" id="year">
                  <option>الأولى ثانوي</option>
                  <option>الثانية ثانوي</option>
                  <option>الثالثة ثانوي</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="user_lname">اسم التخصص</label>
                <input type="text" class="form-control" name="user_lname" id="user_lname" placeholder="">
            </div>
        </div>
        <div class="form-row text-right">
            <div class="form-group col-md-6">
                <div class="form-group">
                  <label for="field">المواد</label>
                  <select dir="rtl" class="form-control" name="field" id="field" multiple>
                     <option>الرياضيات</option>
                     <option>اللغة العربية</option>
                     <option>اللغة الفرنسية</option>
                  </select>
                </div>
             </div>
          <div class="form-group col-md-6">
              <label for="teacher_password">رقم القسم</label>
              <input type="password" class="form-control" name="teacher_password" id="teacher_password" placeholder="">
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