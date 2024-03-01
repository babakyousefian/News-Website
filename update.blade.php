
{{--/**--}}
{{--* Author = babak yousefian--}}
{{--*/--}}

@extends('admin.panel')
@section('content')
    @if(Session::has('error_message'))
        <div class="form_error_message">{{Session::get("error_message")}}</div>
    @endif
    @if(Session::has('success_message'))
        <div class="form_success_message">{{Session::get("success_message")}}</div>
    @endif

    <form action="{{URL::asset("admin/category/update_check/".$category->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form_input_title">عنوان دسته:</div>
        <input type="text" name="name" class="form_input" value="{{$category->name}}">
        @if($errors->has('name'))
            <div class="error_msg">{{$errors->first('name')}}</div>
        @endif
        <input type="submit" value="ویرایش دسته" class="form_btn">
    </form>

@endsection
