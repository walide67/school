@extends('admin.layouts.master')

@section('titre')
    Add metter
@endsection

@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة مادة</h4>
    <div class="w-75 m-auto">
      @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
      @endif
    <form action="{{route("admin.add.matter.submit")}}" method="post" class="text-right" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
          <label for="matter_name">اسم المادة</label>
          <input type="text"
            class="form-control" name="matter_name" id="matter_name" placeholder="">
          @error('matter_name')
        <small class="text-danger">{{$message}}</small>
          @enderror
          </div>
          <div class="form-group">
            <label for="matter_lvl">مستوى المادة</label>
            <select class="form-control" name="matter_lvl" id="matter_lvl">
              <option value ="0" selected>جميع المستويات</option>
              <option value ="1">الاولى ثانوي</option>
              <option value ="2">الثانية ثانوي</option>
              <option value ="3">الثالثة ثانوي</option>
            </select>
            @error('matter_lvl')
        <small class="text-danger">{{$message}}</small>
          @enderror
          </div>
          <div class="form-group">
            <label for="matter_photo">صورة المادة</label>
            <input type="file"
              class="form-control" name="matter_photo" id="matter_photo" placeholder="">
              @error('matter_photo')
              <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        <div class="form-row">
          <button type="submit" class="btn btn-success m-auto">حفط</button>
        </div>
    </form>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection