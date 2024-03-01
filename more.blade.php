
{{--/**--}}
{{--* Author = babak yousefian--}}
{{--*/--}}

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ادامه مطلب</title>
</head>



<link rel="stylesheet" href="{{URL::asset("css/style.css")}}" />
<link rel="stylesheet" href="{{URL::asset("css/bootstrap.min.css")}}" />



<body>


<div id="message"><div class="massage_box">
        <a href="/">صفحه اصلی</a> |
        <a href="/">فن آوری</a> |
        <a href="/">مذهبی</a> |
        <a href="/">هنری</a> |
        <a href="/">ورزشی</a> |
        <a href="/">اقتصادی</a> |
        <a href="/">مقاله</a> |
        <a href="/">محیط زیست</a> |
        <a href="/">فرهنگی</a> |
        <a href="/">اجتماعی</a> |
        <a href="/">رسانه</a> |
        <a href="/">دولت</a> |
        <a href="/">سیاسی</a>
    </div></div>




<!--هدر سایت-->
<div class="header">

    <div class="logo"></div>

    <ul class="ico_top">
        <li><img src="{{URL::asset("img/feedback.png")}}" /></li>
        <li><img src="{{URL::asset("img/rss.png")}}" /></li>
        <li><a href="{{URL::asset('')}}"><img src="{{URL::asset("img/home.png")}}" /></a></li>
    </ul>

    <div class="link_bar"><a href="/">متن تست</a></div>

    <form action="{{URL::asset('search')}}" method="post">
        {{csrf_field()}}
        <div class="search">
            <input type="text" name="search" value="" onfocus="if(this.value == '')this.value=''" onblur="if(this.value == '')this.value='جستجو در سایت ...'" />
        </div>
        <div class="search_submit"><button type="submit" name="submit"></button></div>
    </form>

</div>

<!-- محتوای سایت -->
<div class="body_box"><div class="body_box_bg">

        <div class="box_left">

            <div class="more_all">
                <div class="more_title">{{$news->title}}</div>
                <div class="more_image"><img src="{{"../news_images/".$news->image}}"></div>
                <div class="more_description">{{$news->description}}</div>
                <div class="more_details_part">دسته بندی :<a href="{{URL::asset('category/'.$news->category_id)}}">{{$news->category->name}}</a></div>
                <div class="more_details_part">نویسنده:{{$news->admin->fname.' '.$news->admin->lname}}</div>
                <div class="more_details_part">تاریخ:{{$news->date}}</div>
            </div>

            <div class="top_box_news">




                <div class="cls"></div>
            </div>












        </div>





        <div class="box_right">

            <!-- jquery - tab -->
            <table border="0" cellpadding="0" cellspacing="0" class="pageme">

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01-1.jpg")}})"><b>آخرین اخبار ورزشی</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($sports as $sport)
                                    <li>
                                        <a href="{{URL::asset("more/".$sport["id"])}}">
                                            <img src="{{URL::asset("news_images/".$sport["image"])}}" width="60" height="45"/>
                                            {{$sport["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01.jpg")}})"><b>آخرین اخبار سیاسی</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($politics as $politic)
                                    <li>
                                        <a href="{{URL::asset("more/".$politic["id"])}}">
                                            <img src="{{URL::asset("news_images/".$politic["image"])}}" width="60" height="45"/>
                                            {{$politic["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01-2.jpg")}})"><b>آخرین اخبار اقتصادی</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($economics as $economic)
                                    <li>
                                        <a href="{{URL::asset("more/".$economic["id"])}}">
                                            <img src="{{URL::asset("news_images/".$economic["image"])}}" width="60" height="45"/>
                                            {{$economic["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01-3.jpg")}})"><b>آخرین اخبار بین الملل</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($internationals as $international)
                                    <li>
                                        <a href="{{URL::asset("more/".$international["id"])}}">
                                            <img src="{{URL::asset("news_images/".$international["image"])}}" width="60" height="45"/>
                                            {{$international["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01-4.jpg")}})"><b>آخرین اخبار تکنولوژی</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($technologies as $technology)
                                    <li>
                                        <a href="{{URL::asset("more/".$technology["id"])}}">
                                            <img src="{{URL::asset("news_images/".$technology["image"])}}" width="60" height="45"/>
                                            {{$technology["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01-1.jpg")}})"><b>آخرین اخبار هنری</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($arts as $art)
                                    <li>
                                        <a href="{{URL::asset("more/".$art["id"])}}">
                                            <img src="{{URL::asset("news_images/".$art["image"])}}" width="60" height="45"/>
                                            {{$art["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01-2.jpg")}})"><b>آخرین اخبار سینما</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($cinemas as $cinema)
                                    <li>
                                        <a href="{{URL::asset("more/".$cinema["id"])}}">
                                            <img src="{{URL::asset("news_images/".$cinema["image"])}}" width="60" height="45"/>
                                            {{$cinema["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01-3.jpg")}})"><b>آخرین اخبار غذا</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($foods as $food)
                                    <li>
                                        <a href="{{URL::asset("more/".$food["id"])}}">
                                            <img src="{{URL::asset("news_images/".$food["image"])}}" width="60" height="45"/>
                                            {{$food["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01-4.jpg")}})"><b>آخرین اخبار انیمیشن</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($animations as $animation)
                                    <li>
                                        <a href="{{URL::asset("more/".$animation["id"])}}">
                                            <img src="{{URL::asset("news_images/".$animation["image"])}}" width="60" height="45"/>
                                            {{$animation["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="title_more0" style="background:url({{URL::asset("img/img_01.jpg")}})"><b>آخرین اخبار بازی</b></div>
                        <div class="pad">

                            <ul class="box_news_i">
                                @foreach($games as $game)
                                    <li>
                                        <a href="{{URL::asset("more/".$game["id"])}}">
                                            <img src="{{URL::asset("news_images/".$game["image"])}}" width="60" height="45"/>
                                            {{$game["title"]}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    </td>
                </tr>


            </table>
            <div class="pager"></div>
            <div class="cls"></div>
            <!-- jquery - tab-end -->






        </div>







        <div class="cls"></div>
    </div></div>

<!--footer-->
<div class="footer">
    <div class="footer_bg">
        <p>تمامی حقوق این سایت متعلق به پورتال خبری بابک یوسفیان می باشد.<Br /> طراحی و برنامه نویسی توسط : https://github.com/babakyousefian?tab=repositories | بابک یوسفیان </p>
    </div></div>





</body>
<div style="visibility:visible;display:inline-flex">
    <a href="https://github.com/babakyousefian?tab=repositories">https://github.com/babakyousefian?tab=repositories</a>
    <div>
    </div>
</div>
</html>
