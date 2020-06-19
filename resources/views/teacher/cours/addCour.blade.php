@extends('teacher.layouts.master')

@section('title')

add cour

@endsection

@section('head-content')
<link rel="stylesheet" href="{{ asset('multiselect/css/bootstrap-multiselect.css') }}">
@endsection


@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة درس جديد</h4>
    @if (session('success'))
        <div class="alert alert-success w-50" role="alert">
          {{session('success')}}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger w-50" role="alert">
          {{session('error')}}
        </div>
    @endif
    <div class=" w-75 m-auto ">
    <form action="{{route('add.cour.submit')}}" method="post" class=" text-right" enctype="multipart/form-data">
        @csrf
      <div class="form-group form-row">
          <label for="cour_title">عنوان الدرس</label>
          <input type="text" class="form-control" name="cour_title" id="cour_title" placeholder="ادخل عنوانا للدرس">
        @error('cour_title')
            <small class="text-danger">
              {{$message}}
            </small>
        @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="cour_lvl">السنة</label>
            <select class="form-control" name="cour_lvl" id="cour_lvl">
              <option value="">اختر المستوى</option>
              <option value="1">الأولى ثانوي</option>
              <option value="2">الثانية ثانوي</option>
              <option value="3">الثالثة ثانوي</option>
            </select>
            @error('cour_lvl')
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
          <label for="cour_desc">نبذة عن الدرس</label>
          <textarea class="form-control" name="cour_desc" id="cour_desc" rows="5"></textarea>
          @error('cour_desc')
            <small class="text-danger">
              {{$message}}
            </small>
        @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="cour_pic">صورة الدرس</label>
            <input type="file" class="form-control-file" name="cour_pic" id="cour_pic" placeholder="اضافة صورة للدرس" aria-describedby="cour_pic">
            @error('cour_pic')
            <small class="text-danger">
              {{$message}}
            </small>
          @enderror
            <small id="cour_pic" class="form-text text-muted">يمكن وضع صورة اختيارية كغلاف للدرس</small>
          </div>
          <div class="form-group col-md-6">
            <label for="cour_file">ملف الدرس</label>
            <input type="file"  class="form-control-file" name="cour_file" id="cour_file" placeholder="اضافة ملف الدرس">
            @error('cour_file')
            <small class="text-danger">
              {{$message}}
            </small>
          @enderror
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