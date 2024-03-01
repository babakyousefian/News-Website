
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
    <form action="{{URL::asset("admin/account/update_check/".$admin->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form_input_title">نام:</div>
        <input type="text" name="fname" class="form_input" value="{{$admin->fname}}">
        @if($errors->has('fname'))
            <div class="error_msg">{{$errors->first('fname')}}</div>
        @endif

        <div class="form_input_title">نام خانوادگی:</div>
        <input type="text" name="lname" class="form_input" value="{{$admin->lname}}">
        @if($errors->has('lname'))
            <div class="error_msg">{{$errors->first('lname')}}</div>
        @endif

        <div class="form_input_title">تصویر پروفایل:</div>
        <input type="file" name="image" class="form_file">
        @if($errors->has('image'))
            <div class="error_msg">  {{$errors->first('image')}}</div>
        @endif
        <input type="submit" value="ویرایش" class="form_btn">
    </form>
@endsection
