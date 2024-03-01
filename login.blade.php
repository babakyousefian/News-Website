
{{--/**--}}
{{--* Author = babak yousefian--}}
{{--*/--}}

<html>
<head>
    <title>ورود</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
</head>
<body style="background: none">
<div class="form">
    @if(Session::has('message'))
        <div class="form_error_message">{{Session::get('message')}}</div>
        @endif
<form action="{{URL::asset("login_check")}}" method="post">
    {{csrf_field()}}
    <div class="form_input_title">نام کاربری:</div>
    <input type="text" name="username" class="form_input">
    @if($errors->has('username'))
        <div class="error_msg">{{$errors->first('username')}}</div>
        @endif
    <div class="form_input_title">گذرواژه:</div>
    <input type="password" name="password" class="form_input">
    @if($errors->has('password'))
        <div class="error_msg">  {{$errors->first('password')}}</div>
    @endif
    <input type="submit" value="ورود" class="form_btn">
</form>
</div>
</body>
</html>
