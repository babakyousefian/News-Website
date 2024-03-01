<?php


/**
 * Author = babak yousefian
 */


namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function panel()
    {
        if(Session::has("admin_id"))
           return view("admin.panel");
        else
            return redirect('login');
    }

    public function update_account_form()
    {
        if(!login_validate())
        {
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $admin = Admin::find(Session::get('admin_id'));
            return view('admin.account.update', compact('admin'));
        }
    }

    public function update_account_check(Admin $admin , Request $request)
    {
        if(!login_validate())
        {
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $this->validate(request(), ["fname" => "required", "lname" => "required"]);
            $fname = $request->fname;
            $lname = $request->lname;
            $image = $request->image;
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
                        if ($admin->profile != '') {
                            unlink("admin_images/" . $admin->profile);
                            $image->move("admin_images", $image_new_name);
                        }
//                    Session::flash("success_message","خبر با موفقیت درج شد");
//                    return redirect()->back();
                    } else {
                        Session::flash("error_message", "لطفا عکسی که انتخاب میکنید یا png باشد یا jpg یا jpeg");
                        return redirect()->back();
                    }
                }
            } else {
                $image_new_name = $admin->profile;
//            Session::flash("error_message","لطفا عکس مورد نظر را انتخاب کنید");
//            return redirect()->back();
            }
            $admin->fname = $fname;
            $admin->lname = $lname;
            $admin->profile = $image_new_name;
            $admin->save();

            Session::flash("success_message", 'اطلاعات حساب کاربری شما با موفقیت ویرایش شد');
            return redirect()->back();
        }
    }

    public function exit()
    {
        Session::forget('admin_id');
        return redirect('/');
    }
}
