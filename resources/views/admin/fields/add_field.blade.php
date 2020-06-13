@extends('admin.layouts.master')

@section('titre')
    Add field
@endsection

@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة تخصص</h4>
    <div class="w-50 m-auto text-right">
      @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
      @endif
    <form action="{{route('admin.add.fields.submit')}}" method="post" enctype="multipart/form-data" >
          @csrf
        <div class="form-group">
          <label for="field_name">اسم التخصص</label>
          <input type="text"
            class="form-control" name="field_name" id="field_name" placeholder="">
        @error('field_name')
        <small class="text-danger" >{{$message}}</small>
        @enderror
          </div>
        <div class="form-group">
          <label for="field_photo">صورة التخصص</label>
          <input type="file" class="form-control-file" name="field_photo" id="field_photo">
          @error('field_photo')
          <small class="text-danger" >{{$message}}</small>
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