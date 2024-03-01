
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
            <th>ویرایش</th>
            <th>حذف</th>
        </tr>
        @php $i=1;@endphp
        @foreach($categories as $category)

            <tr>
                <td>{{$i++}}</td>
                <td>{{$category["name"]}}</td>
                <td><a href="{{URL::asset("admin/category/update/".$category["id"])}}">ویرایش</a></td>
                <td><a href="{{URL::asset("admin/category/delete/".$category["id"])}}">حذف</a></td>
            </tr>
        @endforeach
    </table>
    {{$categories->links()}}
@endsection
