@extends('teacher.layouts.master')

@section('title')

Personal Informations

@endsection

@section('head-content')
<link rel="stylesheet" href="{{ asset('multiselect/css/bootstrap-multiselect.css') }}">
@endsection
@section('content')
<div class="container text-center">
    <h4 class="my-3">المعلومات الشخصية</h4>
</div>
<div class=" my-3 border w-75 m-auto p-3">
    <div class="row w-100">
        @if (session('success'))
        <div class="alert alert-success mx-auto mb-3" role="alert">
           {{session('success')}}
        </div>
    @endif
    </div>
<form action="{{route('user.infos.submit')}}" method="post" class="text-right" enctype="multipart/form-data" >
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="user_fname">الاسم</label>
            <input type="text" value="{{auth('teacher')->user()->first_name}}" class="form-control" name="user_fname" id="user_fname" placeholder="">
            @error('user_fname')
                <small class="text-danger">
                  {{$message}}
                </small>
            @enderror
        </div>
            <div class="form-group col-md-6">
                <label for="user_lname">اللقب</label>
                <input type="text" value="{{auth('teacher')->user()->last_name}}" class="form-control" name="user_lname" id="user_lname" placeholder="">
                @error('user_lname')
                <small class="text-danger">
                  {{$message}}
                </small>
            @enderror
            </div>
        </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="classes">الأقسام</label>
                    <select class="form-control" name="classes[]" id="classes" multiple>
                      <optgroup label="الاولى ثانوي">
                        @forelse($classes_lvl_1 as $classe)
                        <option value="{{$classe->id}}" {{auth('teacher')->user()->classes->contains('id', $classe->id)?'selected':''}}>{{$classe->field->field_name .' '.$classe->class_number}}</option>
                        @endforeach
                       </optgroup>
                       <optgroup label="الثانية ثانوي">
                        @forelse($classes_lvl_2 as $classe)
                        <option value="{{$classe->id}}" {{auth('teacher')->user()->classes->contains('id', $classe->id)?'selected':''}}>{{$classe->field->field_name .' '.$classe->class_number}}</option>
                        @endforeach
                       </optgroup>
                       <optgroup label="الثالثة ثانوي">
                        @forelse($classes_lvl_3 as $classe)
                        <option value="{{$classe->id}} {{auth('teacher')->user()->classes->contains('id', $classe->id)?'selected':''}}">{{$classe->field->field_name .' '.$classe->class_number}}</option>
                        @endforeach
                       </optgroup>
                    </select>
                    @error('classes')
                    <small class="text-danger">
                      {{$message}}
                    </small>
                @enderror
                  </div>
            <div class="form-group col-md-6">
                <label for="user_photo">الصورة الشخصية</label>
                <input type="file" class="form-control-file" name="user_photo" id="user_photo" placeholder="" aria-describedby="fileHelpId">
                @error('user_photo')
                <small class="text-danger">
                  {{$message}}
                </small>
            @enderror
            </div>
            </div>
            <div class="form-row">
                <button type="submit" class="btn btn-success mx-auto my-5">حفط</button>
            </div>
    </form>
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