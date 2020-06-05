@extends('teacher.layouts.master')

@section('title')
Cours
@endsection

@section('head-content')
<link rel="stylesheet" type="text/css" href="{{asset('DataTables/css/jquery.dataTables.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('DataTables/css/dataTables.bootstrap.min.css')}}"/>
@endsection

@section('content')
    <div class="container">
        <div class="w-100 text-center my-3">
        <h3>الدروس</h3>
        </div>
        <div class="w-100 mx-0 my-3">
            <table id="coursTable" class="row-border hover stripe text-right" style=" width: 100% ">
                <thead>
                    <tr>
                        <th>اسم الدرس</th>
                        <th>تاريخ النشر</th>
                        <th>نوع الملف</th>
                        <th>عدد التحميلات</th>
                        <th>التقييم</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>المتميز في الرياضيات</td>
                        <td>2012/12/02</td>
                        <td>pdf</td>
                        <td>61</td>
                        <td>3.5</td>
                        <td>
                            <a href="" class="btn btn-warning my-2 mx-auto m-md-auto">تعديل</a>
                            <a href="" class="btn btn-danger my-2 mx-auto m-md-auto">حذف</a>
                        </td>
                    </tr>
                    <tr>
                        <td>المتميز في الرياضيات</td>
                        <td>2012/12/02</td>
                        <td>pdf</td>
                        <td>61</td>
                        <td>3.5</td>
                        <td>
                            <a href="" class="btn btn-warning my-2 mx-auto m-md-auto">تعديل</a>
                            <a href="" class="btn btn-danger my-2 mx-auto m-md-auto">حذف</a>
                        </td>
                    </tr>
                    <tr>
                        <td>المتميز في الرياضيات</td>
                        <td>2012/12/02</td>
                        <td>pdf</td>
                        <td>61</td>
                        <td>3.5</td>
                        <td>
                        <a href="{{route('add-cour', 'edit')}}" class="btn btn-warning my-2 mx-auto m-md-auto">تعديل</a>
                            <a href="" class="btn btn-danger my-2 mx-auto m-md-auto">حذف</a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>اسم الدرس</th>
                        <th>تاريخ النشر</th>
                        <th>نوع الملف</th>
                        <th>عدد التحميلات</th>
                        <th>التقييم</th>
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
                "lengthMenu": "عرض _MENU_ درس في كل صفحة",
                "zeroRecords": "لا يوجد دروس مطابقة",
                "info": "عرض _PAGE_ من _PAGES_",
                "infoEmpty": "لا يوجد دروس",
                "search":         "بحث: ",
                "infoFiltered": "(عرض من اصل _MAX_ درس موجود)",
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