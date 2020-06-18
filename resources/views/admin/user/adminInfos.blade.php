@extends('admin.layouts.master')

@section('title')

Personal Informations

@endsection

@section('head-content')
<link rel="stylesheet" href="{{ asset('multiselect/css/bootstrap-multiselect.css') }}">
@endsection

@section('content')

<div class="container text-center">
    <h4 class="my-3">معلومات الموقع</h4>
</div>
<div class="my-3 border w-75 m-auto p-3">
    <form action="" method="post" class="text-center" >
        <button type="submit" class="btn btn-success m-auto">حفط</button>
    </form>
</div>

@endsection

@section('scripts')

@endsection