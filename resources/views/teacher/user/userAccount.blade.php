@extends('teacher.layouts.master')

@section('title')

Account informations

@endsection

@section('content')

<div class="container text-center">
    <h4 class="my-3">معلومات الحساب</h4>
</div>
<div class="my-3 border w-75 m-auto p-3">
    <form action="" method="post" class="text-center" >
        <div class="form-row text-right">
            <div class="form-group col-md-6">
              <label for="user_email">البريد الالكتروني</label>
              <input type="email" class="form-control" name="user_email" id="user_email" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="user_phone">رقم الهاتف</label>
                <input type="tel" class="form-control" name="user_phone" id="user_phone" placeholder="">
            </div>
        </div>
        <div class="form-row text-right">
            <div class="form-group col-md-6">
              <label for="user_password">كلمة المرور</label>
              <input type="password" class="form-control" name="user_password" id="user_password" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="cnf_password">تأكيد كلمة المرور</label>
                <input type="password" class="form-control" name="cnf_password" id="cnf_password" placeholder="">
            </div>
        </div>
            
            <button type="submit" class="btn btn-danger m-auto">حفط</button>
    </form>
</div>

@endsection

@section('scripts')

@endsection