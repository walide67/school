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
        @if(session()->has('success'))
    <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif
        @if (session()->has('error'))
    <div class="alert alert-danger">{{session()->get('error')}}</div>
        @endif
    <form action="{{ route('add.teacher.submit') }}" method="post" class="text-center" enctype="multipart/form-data" >
        @csrf
        <div class="form-row text-right">
            <div class="form-group col-md-6">
              <label for="user_fname">الاسم</label>
              <input type="text" class="form-control" name="user_fname" id="user_fname" placeholder="">
              @error('user_fname')
              <small class="text-danger" >{{$message}}</small>
              @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="user_lname">اللقب</label>
                <input type="text" class="form-control" name="user_lname" id="user_lname" placeholder="">
                @error('user_lname')
                <small class="text-danger" >{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="form-row text-right">
          <div class="form-group col-md-6">
            <label for="teacher_email">البريد الالكتروني</label>
            <input type="text" class="form-control" name="teacher_email" id="teacher_email" placeholder="">
            @error('teacher_email')
            <small class="text-danger" >{{$message}}</small>
            @enderror
        </div>
          <div class="form-group col-md-6">
              <label for="teacher_password">كلمة المرور</label>
              <input type="password" class="form-control" name="teacher_password" id="teacher_password" placeholder="">
              @error('teacher_password')
              <small class="text-danger" >{{$message}}</small>
              @enderror
            </div>
      </div>
            <div class="form-row text-right">
                <div class="form-group col-md-6">
                    <label for="metter">المادة</label>
                    <select class="form-control" name="matter" id="matter">
                      <option value="">اختر المادة</option>
                      @foreach($matters as $matter)
                    <option value="{{$matter->id}}">{{$matter->matter_name}}</option>
                      @endforeach
                    </select>
                    @error('matter')
                    <small class="text-danger" >{{$message}}</small>
                    @enderror
                  </div>
                <div class="form-group col-md-6">
                   <div class="form-group">
                     <label for="classes">الأقسام</label>
                     <select dir="rtl" class="form-control" name="classes[]" id="classes" multiple>
                        <optgroup label="الاولى ثانوي">
                        @forelse($classes_lvl_1 as $classe)
                        <option value="{{$classe->id}}">{{$classe->field->field_name .' '.$classe->class_number}}</option>
                        @endforeach
                       </optgroup>
                       <optgroup label="الثانية ثانوي">
                        @forelse($classes_lvl_2 as $classe)
                        <option value="{{$classe->id}}">{{$classe->field->field_name .' '.$classe->class_number}}</option>
                        @endforeach
                       </optgroup>
                       <optgroup label="الثالثة ثانوي">
                        @forelse($classes_lvl_3 as $classe)
                        <option value="{{$classe->id}}">{{$classe->field->field_name .' '.$classe->class_number}}</option>
                        @endforeach
                       </optgroup>
                     </select>
                     @error('field')
                    <small class="text-danger" >{{$message}}</small>
                    @enderror
                   </div>
                </div>
            </div>
            <div class="form-row text-right">
                <div class="form-group col-md-6">
                    <label for="user_photo">الصورة الشخصية</label>
                    <input type="file" class="form-control-file" name="user_photo" id="user_photo" placeholder="" aria-describedby="fileHelpId">
                    @error('user_photo')
                    <small class="text-danger" >{{$message}}</small>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="school_id" value="{{Auth::guard('subAdmin')->user()->id}}">
            <button type="submit" class="btn btn-success m-auto">حفط</button>
    </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('multiselect/js/bootstrap-multiselect.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#classes').multiselect({
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