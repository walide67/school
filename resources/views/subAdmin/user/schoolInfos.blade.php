@extends('subAdmin.layouts.master')

@section('title')

Personal Informations

@endsection

@section('head-content')
<link rel="stylesheet" href="{{ asset('multiselect/css/bootstrap-multiselect.css') }}">
@endsection

@section('content')

<div class="container text-center">
    <h4 class="my-3">معلومات المؤسسة</h4>
</div>
<div class="my-3 border w-75 m-auto p-3 text-center">
  @if (session('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
  @endif
    <form action="{{route('school.infos.submit')}}" method="post" class="text-center" enctype="multipart/form-data" >
        @csrf
      <div class="form-row text-right">
            <div class="form-group col-md-6">
              <label for="school_name">اسم المؤسسة</label>
            <input type="text" class="form-control" value="{{auth()->user()->school_name}}" name="school_name" id="school_name" placeholder="">
              @error('school_name')
              <small class="text-danger">
                {{$message}}
              </small>
          @enderror
            </div>
            <div class="form-group col-md-6">
                <label for="school_photo">صورة المؤسسة</label>
                <input type="file" class="form-control-file" name="school_photo" id="school_photo" placeholder="" aria-describedby="fileHelpId">
            @error('school_photo')
                <small class="text-danger">
                  {{$message}}
                </small>
            @enderror
              </div>
        </div>
            <div class="form-row text-right">
              <div class="form-group col-md-6">
                <label for="wilaya">الولاية</label>
                <select class="form-control" name="wilaya" id="wilaya" onchange="getCommune('#commune', '#wilaya')">
                  <option value='' selected>اختر الولاية</option>
                </select>
                @error('wilaya')
               <small class="text-danger" >{{$message}}</small>
               @enderror
              </div>
            
              <div class="form-group col-md-6">
                <label for="commune">البلدية</label>
                <select class="form-control" name="commune" id="commune">
                  <option value='' selected>اختر البلدية</option>
                </select>
                @error('commune')
                <small class="text-danger" >{{$message}}</small>
                @enderror
              </div>
            </div>
           <div class="form-row">
            <button type="submit" class="btn btn-success m-auto">حفط</button>
           </div>
    </form>
</div>

@endsection

@section('scripts')
<script src="{{asset('customJs/wilayaCommune.js')}}"></script>
<script>
  $(document).ready(function(){
    getWilayas("#wilaya");
     });
</script>
@endsection