<?php


/**
 * Author = babak yousefian
 */


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{

    public function add_news_form()
    {
        if(!login_validate())
        {
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $categories = Category::all();
            return view("admin.news.add", compact("categories"));
        }
    }

    public function add_news_check(Request $request)
    {
        if(!login_validate())
        {
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $title = $request->title;
            $image = $request->image;
            $category = $request->category;
            $description = $request->description;
            if (isset($image)) {
                $image_size = $image->getSize() / 1024;
                if ($image_size > 7168) {
                    Session::flash("error_message", "لطفا عکسی که انتخاب میکنید کمتر از 7 مگابایت باشد");
                    return redirect()->back();
                } else {
                    $image_extension = $image->getClientOriginalExtension();
                    $extension_array = array("jpg", "png", "jpeg");
                    if (in_array($image_extension, $extension_array)) {
                        $image_name = $image->getClientOriginalName();
                        $image_new_name = md5($image_name . microtime()) . substr($image_name, -5, 5);
                        $image->move("news_images", $image_new_name);
                        News::create(["title" => $title, "category_id" => $category, "admin_id" => Session::get("admin_id"),
                            "description" => $description, "image" => $image_new_name, "date" => jdate(), "state" => "1"]);
                        Session::flash("success_message", "خبر با موفقیت درج شد");
                        return redirect()->back();
                    } else {
                        Session::flash("error_message", "لطفا عکسی که انتخاب میکنید یا png باشد یا jpg یا jpeg");
                        return redirect()->back();
                    }
                }
            } else {
                Session::flash("error_message", "لطفا عکس مورد نظر را انتخاب کنید");
                return redirect()->back();
            }
        }
    }

    public function show_news()
    {
        if(!login_validate())
        {
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else
        {
            $news=News::latest('id')->paginate(10);
            return view("admin.news.show",compact("news"));
        }
    }

    public function delete_news(News $news)
    {
        if(!login_validate()){
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else{
            unlink("news_images/".$news->image);
            $news->delete();
            Session::flash("success_message","خبر مورد نظر با موفقیت پاک شد");
            return redirect()->back();
        }
    }

    public function update_news_form(News $news)
    {
        if(!login_validate())
        {
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $categories = Category::all();
            return view("admin.news.update", compact('news', 'categories'));
        }
    }

    public function update_news_check(News $news,Request $request)
    {
        if(!login_validate())
        {
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $title = $request->title;
            $image = $request->image;
            $category = $request->category;
            $description = $request->description;
            if (isset($image)) {
                $image_size = $image->getSize() / 1024;
                if ($image_size > 7168) {
                    Session::flash("error_message", "لطفا عکسی که انتخاب میکنید کمتر از 7 مگابایت باشد");
                    return redirect()->back();
                } else {
                    $image_extension = $image->getClientOriginalExtension();
                    $extension_array = array("jpg", "png", "jpeg");
                    if (in_array($image_extension, $extension_array)) {
                        $image_name = $image->getClientOriginalName();
                        $image_new_name = md5($image_name . microtime()) . substr($image_name, -5, 5);
                        unlink("news_images/" . $news->image);
                        $image->move("news_images", $image_new_name);
                    } else {
                        Session::flash("error_message", "لطفا عکسی که انتخاب میکنید یا png باشد یا jpg یا jpeg");
                        return redirect()->back();
                    }
                }
            } else {
                $image_new_name = $news->image;
            }

            $news->title = $title;
            $news->category_id = $category;
            $news->description = $description;
            $news->image = $image_new_name;
            $news->save();

            Session::flash("success_message", "خبر با موفقیت به روز رسانی شد");
            return redirect()->back();
        }
    }
}
