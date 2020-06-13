@extends('admin.layouts.master')

@section('titre')
    Add school
@endsection

@section('content')

<div class="container text-center">
    <h4 class="my-3">اضافة مؤسسة</h4>
    <div class="w-75 m-auto">
      <form action="" method="post" class="text-right" >
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email">البريد الالكتروني</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="phone_num">رقم الهاتف</label>
                <input type="tel" class="form-control" name="phone_num" id="phone_num" placeholder="">
              </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="school_name">اسم المؤسسة</label>
                <input type="text" class="form-control" name="school_name" id="school_name" placeholder="">
              </div>
              <div class="form-group col-md-6">
                  <label for="password">كلمة المرور</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="">
                </div>
          </div>
          <div class="form-row">
           <div class="form-group col-md-6">
             <label for="wilaya">الولاية</label>
             <select class="form-control" name="wilaya" id="wilaya" onchange="getCommune('#commune', '#wilaya')">
               <option value='' selected>اختر الولاية</option>
             </select>
           </div>
           <div class="form-group col-md-6">
            <label for="commune">البلدية</label>
            <select class="form-control" name="commune" id="commune">
              <option selected>اختر البلدية</option>
            </select>
          </div>
          </div>
          <div class="form-row">
              <div class="form-group">
                <label for="school_pic">صورة المؤسسة</label>
                <input type="file" class="form-control-file" name="school_pic" id="school_pic" placeholder="">
              </div>
          </div>
<div class="form-row">
  <button type="submit" class="btn btn-success m-auto">حفط</button>  
</div>
    </form>
    </div>
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