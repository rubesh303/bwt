<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     public function home()
    {
         $data['blogs']=Blog::leftJoin('users','users.id','=','blogs.user_id')
                        ->leftJoin('categories','categories.id','=','blogs.category_id')
                        ->select('blogs.id as id','categories.category_name','blogs.title','blogs.desc','blogs.img','users.name','blogs.user_id')
                        ->paginate(5);
        //  $data['categories']=Category:: leftJoin('blogs','blogs.category_id','=','categories.id')
        //                 ->groupBy('blogs.category_id')
        //                 ->select('category_name','count(blogs.category_id)')->get()->toArray();
        // echo "<pre>";
        //  print_r($data['categories']);
        //  exit;
        $data['categories']=Category::get();
        return view('welcome',$data);
    }
}
