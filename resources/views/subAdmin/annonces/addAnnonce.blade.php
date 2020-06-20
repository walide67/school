@extends('subAdmin.layouts.master')

@section('title')
add annonce
@endsection

@section('content')
<div class="container text-center">
    <h4 class="my-3">اضافة اعلان </h4>
    <div class="w-75 m-auto ">
      @if (session()->has('success'))
          <div class="alert alert-success" role="alert">
            {{session()->get('success')}}
          </div>
      @endif
      @if (session()->has('error'))
          <div class="alert alert-danger" role="alert">
            {{session()->get('error')}}
          </div>
      @endif
        <form action="{{route('subAdmin.add.annonce.submit')}}" method="post" class="text-right w-100" enctype="multipart/form-data">
        @csrf
          <div class="form-group form-row">
          <label for="annonce_title">عنوان الاعلان</label>
          <input type="text" class="form-control" name="annonce_title" id="annonce_title" placeholder="ادخل عنوانا للاعلان">
        @error('annonce_title')
        <small class="text-danger">{{$message}}</small>
        @enderror
        </div>
        <div class="form-group form-row">
          <label for="annonce_desc">محتوى الاعلان</label>
          <textarea class="form-control" name="annonce_desc" id="annonce_desc" rows="5"></textarea>
          @error('annonce_desc')
          <small class="text-danger">{{$message}}</small>
          @enderror
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="annonce_pic">صورة الاعلان</label>
            <input type="file" class="form-control-file" name="annonce_pic" id="annonce_pic" placeholder="اضافة صورة للاعلان" aria-describedby="annonce_pic_helper">
            @error('annonce_pic')
            <small class="text-danger">{{$message}}</small>
            @enderror
            <small id="annonce_pic_helper" class="form-text text-muted">يمكن وضع صورة اختيارية كغلاف للاعلان</small>
          </div>
          <div class="form-group col-md-6">
            <label for="annonce_ex_at">تاريخ صلاحية الاعلان</label>
            <input type="datetime-local" name="annonce_ex_at" id="annonce_ex_at" class="form-control">
          @error('annonce_ex_at')
          <small class="text-danger">{{$message}}</small>
          @enderror
          </div>
        </div>
          <div class="form-row">
            <button type="submit" class="btn btn-success m-auto">اضافة</button>
          </div>
       </form>
    </div>
</div>
@endsection

@section('scripts')

@endsection