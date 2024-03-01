
{{--/**--}}
{{--* Author = babak yousefian--}}
{{--*/--}}

@extends('admin.panel')
@section('content')
    @if(Session::has('success_message'))
        <div class="form_success_message">{{Session::get("success_message")}}</div>
    @endif
<table class="table table-bordered table-hover">
    <tr class="info">
        <th>#</th>
        <th>عنوان</th>
        <th>تاریخ</th>
        <th>ویرایش</th>
        <th>حذف</th>
    </tr>
    @php $i=1;@endphp
    @foreach($news as $n)
    <tr>
        <td>{{$i++}}</td>
        <td>{{$n["title"]}}</td>
        <td>{{$n["date"]}}</td>
        <td><a href="{{URL::asset("admin/news/update/".$n["id"])}}">ویرایش</a></td>
        <td><a href="{{URL::asset("admin/news/delete/".$n["id"])}}">حذف</a></td>
    </tr>
        @endforeach
</table>
    {{$news->links()}}
@endsection
