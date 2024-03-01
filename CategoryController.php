<?php


/**
 * Author = babak yousefian
 */


namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function add_category_form()
    {
        if(!login_validate()){
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            return view("admin.category.add");
        }
    }

    public function add_category_check(Request $request)
    {
        if(!login_validate()){
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $name = $request->name;
            $this->validate(request(), ["name" => "required"]);
            Category::create(["name" => $name]);
            Session::flash("success_message", "دسته جدید با موفقیت درج شد");
            return redirect()->back();
        }
    }

    public function show_categories()
    {
        if(!login_validate()){
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $categories = Category::latest('id')->paginate(10);
            return view("admin.category.show", compact("categories"));
        }
    }

    public function delete_category(Category $category)
    {
        if(!login_validate()){
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            $category->delete();
            Session::flash('success_message', "دسته خبر مورد نظر شما با موفقیت حذف شد");
            return redirect()->back();
        }
    }

    public function update_category_form(Category $category)
    {
        if(!login_validate()){
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }else {
            return view("admin.category.update", compact('category'));
        }
    }

    public function update_category_check(Category $category,Request $request)
    {
        if(!login_validate())
        {
            Session::flash("error_message",'لطفا اول ثبت نام کنید');
            return view("admin.error.error_page");
        }
        else {
            $this->validate(request(), ["name" => "required"]);
            $name = $request->name;
            $category->name = $name;
            $category->save();

            Session::flash("success_message", "دسته خبر مورد نظر شما با موفقیت ویرایش شد");
            return redirect()->back();
        }
    }
}
