
{{--/**--}}
{{--* Author = babak yousefian--}}
{{--*/--}}

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>صفحه اصلی</title>
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
            <ul class="news_list">
                <a href="/"><li title="فن آوری" class="i4 tooltip"></li></a>
                <a href="/"><li title="مذهبی" class="i5 tooltip"></li></a>
                <a href="/"><li title="هنری" class="i4 tooltip"></li></a>
                <a href="/"><li title="ورزشی" class="i3 tooltip"></li></a>
                <a href="/"><li title="حوادث" class="i3 tooltip"></li></a>
                <a href="/"><li title="اقتصادی" class="i4 tooltip"></li></a>
                <a href="/"><li title="مقاله" class="i3 tooltip"></li></a>
                <a href="/"><li title="محیط زیست" class="i3 tooltip"></li></a>
                <a href="/"><li title="فرهنگی" class="i3 tooltip"></li></a>
                <a href="/"><li title="اجتماعی" class="i3 tooltip"></li></a>
                <a href="/"><li title="رسانه ها" class="i3 tooltip"></li></a>
                <a href="/"><li title="دولت" class="i3 tooltip"></li></a>
                <a href="/"><li title="سیاسی" class="i3 tooltip"></li></a>
            </ul>







            <div class="body_text">

                <div class="ads">
                    <OBJECT data="http://www.tabnak.ir/files/adv/2610_239.swf" type="application/x-shockwave-flash" width="130" height="140">
                        <PARAM NAME=movie VALUE="http://www.tabnak.ir/files/adv/2610_239.swf">
                        <PARAM NAME=menu VALUE=false>
                    </OBJECT>

                    <OBJECT data="http://www.tabnak.ir//files/adv/2622_488.swf" type="application/x-shockwave-flash" width="130" height="140">
                        <PARAM NAME=movie VALUE="http://www.tabnak.ir//files/adv/2622_488.swf">
                        <PARAM NAME=menu VALUE=false>
                    </OBJECT>

                    <OBJECT data="http://www.tabnak.ir/files/adv/2637_887.swf" type="application/x-shockwave-flash" width="130" height="210">
                        <PARAM NAME=movie VALUE="http://www.tabnak.ir/files/adv/2637_887.swf">
                        <PARAM NAME=menu VALUE=false>
                    </OBJECT>
                </div>

                <div class="linkdoni">
                    <div class="title_linkdoni"><b> عناوین خبری</b></div>
                    <ul class="link_box2">
                        <li><a href="/"> تریلر گیم‌ پلی جدید Suicide Squad: Kill the Justice با محوریت نمایش داستان و مبارزات </a></li><br><br>
                        <li><a href="/"> تمدید انیمیشن Futurama برای دو فصل دیگر </a></li><br><br>
                        <li><a href="/"> چرا در سفرهای هوایی در هواپیما دچار مشکلات گوارشی می‌شویم؟ </a></li><br><br>
                        <li><a href="/"> تولید ۸ میلیارد یورو پاستا و ماکارونی در اتحادیه اروپا؛ مقصد اصلی محصولات ایتالیا کدام کشورها هستند؟ </a></li><br><br>
                        <li><a href="/"> قصه عاشقانه باران کوثری به رم رفت </a></li><br><br>
                        <li><a href="/"> خداحافظ طنزپرداز رادیو/ مردی که ۳۰ سال برای لبخند نوشت </a></li><br><br>
                        <li><a href="/"> مصاحبه هنری با استاد مرتضی یوسفیان در حاشیه نمایشگاه نقاشی وی در کانون ادب </a></li><br><br>
                        <li><a href="/"> تمام زوایای مبهم کودتای OpenAI؛ ماجرای شوک به دنیای تکنولوژی چه بود؟ </a></li><br><br>
                        <li><a href="/"> فوری؛ حقوق بازنشستگی با ۳۵ سال خدمت اعلام شد </a></li><br><br>
                        <li><a href="/"> کشف گنج طلا در یک روستا / این گنج‌ها با فلزیاب پیدا شد! + فیلم </a></li><br><br>
                        <li><a href="/"> حمله عجیب به طارمی؛ آبروی فوتبال ایران رو نبر | از چوپان دروغگو صد بار بنویس! </a></li><br><br>
                        <li><a href="/"> اعلام تاریخ انتشار فصل دوم انیمیشن Blood of Zeus با پخش اولین تریلر </a></li><br><br>

                    </ul>
                </div>



                <div class="postbox">
                    <!--post-->
                    @foreach($news as $n)
                        <a href="{{URL::asset("more/".$n["id"])}}">
                    <div class="shortstory">
                        <img src="{{URL::asset("news_images/".$n["image"])}}" width="60" />
                        <b>{{$n["title"]}} </b><br />
                        {{mb_substr($n["description"],0,40)}}...
                        <div class="cls"></div>
                    </div>
                        </a>
                    @endforeach
                    <!--end_post-->
                    {{$news->links()}}
                </div>



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
