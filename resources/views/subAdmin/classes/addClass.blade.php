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
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
        @endif
    <form action="{{route('add.class.submit')}}" method="post" class="text-center" >
       @csrf
        <div class="form-row text-right">
            <div class="form-group col-md-6">
                <label for="class_lvl">المستوى</label>
                <select class="form-control py-1" name="class_lvl" id="class_lvl">
                  <option value='' selected>اختر المستوى</option>
                  <option value='1'>الأولى ثانوي</option>
                  <option value='2'>الثانية ثانوي</option>
                  <option value='3'>الثالثة ثانوي</option>
                </select>
                @error('class_lvl')
            <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="filed"> التخصص</label>
                <select  class="form-control" name="field">
                    <option value="" selected>اختر التخصص</option>
                    @foreach($fields as $field)
                <option value="{{$field->id}}">{{$field->field_name}}</option>
                    @endforeach
                 </select>
                 @error('field')
            <small class="text-danger">{{$message}}</small>
                @enderror
                 </div>
        </div>
        <div class="form-row text-right">
            <div class="form-group col-md-6">
                <div class="form-group">
                  <label for="matters">المواد</label>
                  <select dir="rtl" class="form-control" name="matters[]" id="matters" multiple>
                     @foreach ($matters as $matter)
                  <option value="{{$matter->id}}">{{$matter->matter_name}}</option>
                     @endforeach
                  </select>
                  @error('matters')
            <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
             </div>
          <div class="form-group col-md-6">
              <label for="class_num">رقم القسم (اختياري)</label>
              <input type="text" class="form-control" name="class_num" id="class_num" placeholder="رقم القسم اختياري">
              @error('class_num')
              <small class="text-danger">{{$message}}</small><br>
                  @enderror
              <small>يمكنك وضع رقم القسم اذا كنت تريد فصل قسمين من نفس المستوى و التخصص</small>
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
        $('#matters').multiselect({
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