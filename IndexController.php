<?php


/**
 * Author = babak yousefian
 */


namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{

    public function search(Request $request)
    {
        $search=$request->search;
         $sports=News::where('category_id',"1")->latest('id')->paginate(4);
          $politics=News::where('category_id',"2")->latest('id')->paginate(4);
           $economics=News::where('category_id',"3")->latest('id')->paginate(4);
            $internationals=News::where('category_id',"4")->latest('id')->paginate(4);
             $technologies=News::where('category_id',"5")->latest('id')->paginate(4);
            $arts=News::where('category_id',"6")->latest('id')->paginate(4);
           $cinemas=News::where('category_id',"7")->latest('id')->paginate(4);
          $foods=News::where('category_id',"8")->latest('id')->paginate(4);
         $animations=News::where('category_id',"9")->latest('id')->paginate(4);
        $games=News::where('category_id',"10")->latest('id')->paginate(4);
        $news=News::where('title','like','%'.$search.'%')->latest('id')->paginate(8);
        return view('search',compact('sports','politics','economics','internationals'
            ,'technologies','arts','cinemas','foods','animations','games','news'));
    }

    public function category($id)
    {
        $sports=News::where('category_id',"1")->latest('id')->paginate(4);
         $politics=News::where('category_id',"2")->latest('id')->paginate(4);
          $economics=News::where('category_id',"3")->latest('id')->paginate(4);
           $internationals=News::where('category_id',"4")->latest('id')->paginate(4);
            $technologies=News::where('category_id',"5")->latest('id')->paginate(4);
            $arts=News::where('category_id',"6")->latest('id')->paginate(4);
           $cinemas=News::where('category_id',"7")->latest('id')->paginate(4);
          $foods=News::where('category_id',"8")->latest('id')->paginate(4);
         $animations=News::where('category_id',"9")->latest('id')->paginate(4);
        $games=News::where('category_id',"10")->latest('id')->paginate(4);
        $news=News::where('category_id',$id)->latest('id')->paginate(8);
        return view('category',compact('sports','politics','economics','internationals'
            ,'technologies','arts','cinemas','foods','animations','games','news'));
    }

    public function index()
    {
        $sports=News::where('category_id',"1")->latest('id')->paginate(4);
         $politics=News::where('category_id',"2")->latest('id')->paginate(4);
          $economics=News::where('category_id',"3")->latest('id')->paginate(4);
           $internationals=News::where('category_id',"4")->latest('id')->paginate(4);
            $technologies=News::where('category_id',"5")->latest('id')->paginate(4);
             $arts=News::where('category_id',"6")->latest('id')->paginate(4);
            $cinemas=News::where('category_id',"7")->latest('id')->paginate(4);
           $foods=News::where('category_id',"8")->latest('id')->paginate(4);
          $animations=News::where('category_id',"9")->latest('id')->paginate(4);
         $games=News::where('category_id',"10")->latest('id')->paginate(4);
        $news=News::latest('id')->paginate(40);
        return view('index',compact('sports','politics','economics','internationals'
        ,'technologies','arts','cinemas','foods','animations','games','news'));
    }

    public function more(News $news)
    {
        $sports=News::where('category_id',"1")->latest('id')->paginate(4);
         $politics=News::where('category_id',"2")->latest('id')->paginate(4);
          $economics=News::where('category_id',"3")->latest('id')->paginate(4);
           $internationals=News::where('category_id',"4")->latest('id')->paginate(4);
            $technologies=News::where('category_id',"5")->latest('id')->paginate(4);
             $arts=News::where('category_id',"6")->latest('id')->paginate(4);
            $cinemas=News::where('category_id',"7")->latest('id')->paginate(4);
           $foods=News::where('category_id',"8")->latest('id')->paginate(4);
          $animations=News::where('category_id',"9")->latest('id')->paginate(4);
         $games=News::where('category_id',"10")->latest('id')->paginate(4);
        return view('more',compact('sports','politics','economics','internationals'
            ,'technologies','arts','cinemas','foods','animations','games','news'));
    }

    public function login()
    {
        return view('login');
    }

    public function login_check(Request $request)
    {
        $username=$request->username;
        $password=$request->password;
        $this->validate(request(),["username"=>"required","password"=>"required"]);
        $admin_count=Admin::where(["email"=>$username,"password"=>$password])->count();
        if($admin_count)
        {
            $admin=Admin::where(["email"=>$username,"password"=>$password])->first();
            Session::put("admin_id",$admin->id);
            return redirect("admin/panel");
        }
        else
        {
            Session::flash("message","نام کاربری یا گذرواژه اشتباه است");
            return redirect()->back();
        }
    }
}
