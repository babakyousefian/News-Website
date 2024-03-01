
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
    <form action="{{URL::asset("admin/news/add_check")}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form_input_title">عنوان خبر:</div>
        <input type="text" name="title" class="form_input">
        @if($errors->has('title'))
            <div class="error_msg">{{$errors->first('title')}}</div>
        @endif
        <div class="form_input_title">تصویر خبر:</div>
        <input type="file" name="image" class="form_file">
        @if($errors->has('image'))
            <div class="error_msg">  {{$errors->first('image')}}</div>
        @endif
        <div class="form_input_title">دسته بندی خبر:</div>
        <select name="category" class="form_input">
{{--            <option value="sports">ورزشی</option>--}}
           @foreach($categories as $category)
               <option value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
        </select>
        <div class="form_input_title">توضیحات خبر:</div>
        <textarea  name="description" class="form_text"></textarea>
        @if($errors->has('description'))
            <div class="error_msg">  {{$errors->first('description')}}</div>
        @endif
        <input type="submit" value="افزودن خبر جدید" class="form_btn">
    </form>
@endsection
