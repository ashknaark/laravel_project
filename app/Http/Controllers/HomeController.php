<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Cookie;

class HomeController extends Controller
{
    public function index(){

        $articles = Article::paginate(5);

        return \view("index" , ["articles" => $articles]);
    }

    public function about(){
    return \view("about");
    }


    public function single($slug){
        $article = Article::where("slug" , $slug)->first();
        Article::where("slug" , $slug)->increment("view");


        return \view("single" , ["article" => $article] ) ;

    }

    public function contact(){
        return view("contact");
    }

    public function profile($userName){

        $user = User::where("name",$userName)->first();

        return \view("fashion" ,['user'=>$user ]);
    }



    public function insertComment(Request $request , $slug){


        $request->validate( [
                "name"=>"required | string",
                "email"=>"email |required ",
                "message"=>"required | min:8"
            ]);

        $check =  Article::where("slug" , $slug)->first();

        if ($check){
            $name = $request->input("name");
            $email = $request->input("email");
            $message= $request->input("message");

            Comment::insert([
                "user_id" => Auth::check() == true ?   Auth::id() : null ,
                "name" => $name ,
                "email" =>$email ,
                "article_id"=>$check->id,
                "body"=>$message,
                "date" =>Carbon::now()
            ]);
            Session::flash("status" ,"comment submit successfully");
            return redirect(route("single" , $check->slug));

        }
        return null ;




    }

    public function logout(){
        \auth()->logout();

        return redirect(route("home"));
    }

}
