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
                        <th>نبذة عن الدرس</th>
                        <th>صورة الدرس</th>
                        <th>نوع الملف</th>
                        <th>عدد التحميلات</th>
                        <th>عدد الأصوات</th>
                        <th>التقييم</th>
                        <th>تاريخ النشر</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cours as $cour)
                    <tr>
                    <td>{{$cour->cour_name}}</td>
                    <td>{{$cour->cour_desc}}</td>
                    <td>{{$cour->cour_photo}}</td>
                    <td>pdf</td>
                    <td>{{$cour->download_number}}</td>
                    <td>{{$cour->votes_number}}</td>
                    <td>{{$cour->rate}}</td>
                    <td>{{$cour->created_at}}</td>
                        <td class=" d-flex flex-nowrap justify-content-around">
                            <a href="" class="btn btn-warning mx-1">تعديل</a>
                            <a href="" class="btn btn-danger mx-1">حذف</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>اسم الدرس</th>
                        <th>نبذة عن الدرس</th>
                        <th>صورة الدرس</th>
                        <th>نوع الملف</th>
                        <th>عدد التحميلات</th>
                        <th>عدد الأصوات</th>
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