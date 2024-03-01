
{{--/**--}}
{{--* Author = babak yousefian--}}
{{--*/--}}

<html>
<head>
    <title>پنل مدیریت</title>
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
   <script src="{{URL::asset("js/jquery.js")}}"></script>
    <script>
        $(document).ready(function () {
            $(".child").hide();
            $(".parent").click(function () {
                var id=$(this).attr("data-parent-id");
                $(".child").hide();
                $(".child"+id).toggle();
            });
        });
    </script>
</head>
<body style="background: #edf0ed">

<div class="right_panel">
    <div class="right_panel_top">سلام مدیر بابک یوسفیان
{{--        {{$admin->fname.' '.$admin->lname}}--}}
    </div>
    <div class="right_panel_center">
        <div class="profile">
{{--                @if($admin->profile=="")--}}
                <img src="{{URL::asset("img/profile.png")}}">
{{--                @else--}}
{{--                <img src="{{URL::asset("admin_images/".$admin->profile)}}">--}}
{{--                @endif--}}
        </div>
    </div>
    <div class="right_panel_bottom">
        <ul>
            <li class="parent" data-parent-id="1"><a>مدیریت دسته بندی ها

                    <ul class="child child1">
                        <li><a href="{{URL::asset('admin/category/add')}}">درج دسته جدید</a></li>
                        <li><a href="{{URL::asset('admin/category/show')}}">مشاهده دسته ها</a></li>
                    </ul>

                </a></li>
            <li class="parent" data-parent-id="2"><a>مدیریت اخبار
                <ul class="child child2">
                    <li><a href="{{URL::asset('admin/news/add')}}">درج خبر جدید</a></li>
                    <li><a href="{{URL::asset('admin/news/show')}}">مشاهده اخبار</a></li>
                </ul>
                </a>
                </li>
            <li><a href="{{URL::asset("admin/account/update")}}">مدیریت حساب</a></li>
            <li><a href="{{URL::asset("/")}}" target="_blank">مشاهده وب سایت</a></li>
            <li><a href="{{URL::asset("exit")}}">خروج</a></li>
        </ul>
    </div>
</div>

<div class="left_panel">
    <div class="left_panel_top">تاریخ امروز : 1402/09/09</div>

    <div class="left_panel_bottom">
        <div class="panel_left_main">
            @yield("content")
        </div>
    </div>

</div>
</body>
</html>
