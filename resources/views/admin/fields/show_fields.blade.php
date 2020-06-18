@extends('admin.layouts.master')

@section('titre')
    Fields
@endsection

@section('head-content')
<link rel="stylesheet" type="text/css" href="{{asset('DataTables/css/jquery.dataTables.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('DataTables/css/dataTables.bootstrap.min.css')}}"/>
@endsection

@section('content')

<div class="container">
    <div class="w-100 text-center my-3">
    <h3>التخصصات</h3>
    </div>
    <div class="w-100 mx-0 my-3">
        <table id="coursTable" class="row-border hover stripe text-right" style=" width: 100% ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>اسم التخصص</th>
                    <th>صورة التخصص</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($fields as $field)
                <tr>
                    <td>{{$field->id}}</td>
                    <td>{{$field->field_name}}</td>
                    <td>{{$field->field_photo}}</td>
                    <td>
                        <a href="" class="btn btn-warning my-2 mx-auto m-md-auto">تعديل</a>
                        <a href="" class="btn btn-danger my-2 mx-auto m-md-auto">حذف</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>اسم التخصص</th>
                    <th>صورة التخصص</th>
                    <th>العمليات</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{asset('DataTables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('DataTables/js/dataTables.bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function() {
    $('#coursTable').DataTable(
        {
        "paging":   true,
        "ordering": true,
        "scrollX": true,
        "info":     true,
            "language": {
                "lengthMenu": "عرض _MENU_ تخصص في كل صفحة",
                "zeroRecords": "لا يوجد تخصصات مطابقة",
                "info": "عرض _PAGE_ من _PAGES_",
                "infoEmpty": "لا يوجد تخصصات",
                "search":         "بحث: ",
                "infoFiltered": "(عرض من اصل _MAX_ تخصص موجود)",
                "paginate": {
                        "first":      "الأول",
                        "last":       "الأخير",
                        "next":       "التالي",
                        "previous":   "السابق"
                },
            }
        }
    );
} );
</script>
@endsection