@extends('teacher.layouts.master')

@section('title')

add cour

@endsection

@section('head-content')
<link rel="stylesheet" href="{{ asset('multiselect/css/bootstrap-multiselect.css') }}">
@endsection


@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة امتحان جديد</h4>
    @if (session('success'))
        <div class="row w-100">
          <div class="alert alert-success w-50 m-auto" role="alert">
            {{session('success')}}
          </div>
        </div>
    @endif
    @if (session('error'))
        <div class="row w-100">
          <div class="alert alert-danger w-50 m-auto" role="alert">
            {{session('error')}}
          </div>
        </div>
    @endif
    <div class=" w-75 m-auto ">
    <form action="{{route('add.exam.submit')}}" method="post" class=" text-right" enctype="multipart/form-data">
        @csrf
      <div class="form-group form-row">
          <label for="exam_title">عنوان الامتحان</label>
          <input type="text" class="form-control" name="exam_title" id="exam_title" placeholder="ادخل عنوانا للدرس">
        @error('exam_title')
            <small class="text-danger">
              {{$message}}
            </small>
        @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exam_lvl">السنة</label>
            <select class="form-control" name="exam_lvl" id="exam_lvl">
              <option value="">اختر المستوى</option>
              <option value="1">الأولى ثانوي</option>
              <option value="2">الثانية ثانوي</option>
              <option value="3">الثالثة ثانوي</option>
            </select>
            @error('exam_lvl')
              <small class="text-danger">
                {{$message}}
              </small>
          @enderror
          </div>
          <div class="form-group col-md-6">
              <label for="classes">الأقسام</label>
              <select class="form-control" name="classes[]" id="classes" multiple>
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
              @error('classes')
              <small class="text-danger">
                {{$message}}
              </small>
          @enderror
            </div>
        </div>
        <div class="form-group form-row">
          <label for="exam_desc">نبذة عن الامتحان</label>
          <textarea class="form-control" name="exam_desc" id="exam_desc" rows="5"></textarea>
          @error('exam_desc')
            <small class="text-danger">
              {{$message}}
            </small>
        @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exam_file">ملف الامتحان</label>
            <input type="file"  class="form-control-file" name="exam_file" id="exam_file" placeholder="اضافة ملف الدرس">
            @error('exam_file')
            <small class="text-danger">
              {{$message}}
            </small>
          @enderror
          </div>
          <div class="form-group col-md-6">
            <label for="exam_corr">تصحيح الامتحان</label>
            <input type="file"  class="form-control-file" name="exam_corr" id="exam_corr" placeholder="اضافة ملف الدرس">
            @error('exam_corr')
            <small class="text-danger">
              {{$message}}
            </small>
          @enderror
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exam_pic">صورة الامتحان</label>
            <input type="file" class="form-control-file" name="exam_pic" id="exam_pic" placeholder="اضافة صورة للدرس">
            @error('exam_pic')
            <small class="text-danger">
              {{$message}}
            </small>
          @enderror
            <small id="cour_pic" class="form-text text-muted">يمكن وضع صورة اختيارية كغلاف للامتحان</small>
          </div>
        </div>
          <div class="form-row">
            <button type="submit" class="btn btn-success m-auto">حفظ</button>
          </div>
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