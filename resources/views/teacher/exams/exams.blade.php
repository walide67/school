@extends('teacher.layouts.master')

@section('title')
Exams
@endsection

@section('head-content')
<link rel="stylesheet" type="text/css" href="{{asset('DataTables/css/jquery.dataTables.min.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('DataTables/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="w-100 text-center my-3">
        <h3>الامتحانات</h3>
        </div>
        <div class="w-100 mx-0 my-3">
            <table id="coursTable" class="row-border hover stripe text-right" style=" width: 100% ">
                <thead>
                    <tr>
                        <th>اسم الامتحان</th>
                        <th>نبذة عن الامتحان</th>
                        <th>صورة الامتحان</th>
                        <th>ملف الامتحان</th>
                        <th>تصحيح الامتحان</th>
                        <th>نوع الملف</th>
                        <th>عدد التحميلات</th>
                        <th>التقييم</th>
                        <th>تاريخ النشر</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($exams as $exam)
                    <tr>
                    <td>{{$exam->exam_name}}</td>
                    <td>{{$exam->exam_desc}}</td>
                    <td>{{$exam->exam_photo}}</td>
                    <td>{{$exam->file_path}}</td>
                    <td>{{$exam->correction_path}}</td>
                    <td>pdf</td>
                    <td>{{$exam->download_number}}</td>
                    <td>{{$exam->rate}}</td>
                    <td>{{$exam->created_at}}</td>
                        <td class="d-flex flex-nowrap">
                            <a href="" class="btn btn-warning mx-2 ">تعديل</a>
                            <a href="" class="btn btn-danger mx-2">حذف</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>اسم الامتحان</th>
                        <th>نبذة عن الامتحان</th>
                        <th>صورة الامتحان</th>
                        <th>ملف الامتحان</th>
                        <th>تصحيح الامتحان</th>
                        <th>نوع الملف</th>
                        <th>عدد التحميلات</th>
                        <th>التقييم</th>
                        <th>تاريخ النشر</th>
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
                "lengthMenu": "عرض _MENU_ امتحان في كل صفحة",
                "zeroRecords": "لا يوجد امتحانات مطابقة",
                "info": "عرض _PAGE_ من _PAGES_",
                "infoEmpty": "لا يوجد امتحانات",
                "search":         "بحث: ",
                "infoFiltered": "(عرض من اصل _MAX_ امتحان موجود)",
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