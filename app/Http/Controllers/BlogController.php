<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use File;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogs']=Blog::leftJoin('categories','categories.id','=','blogs.category_id')->select('blogs.title','categories.category_name','blogs.id','blogs.date','blogs.status')->get();
        return view('blog.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories']=Category::get();
        return view('blog.addblog',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document ="";
        if (isset($request->bimg)) {
            $files = $request->file('bimg');
            $document = '/public/uploads/blogs/'.$files->getClientOriginalName();
            $files->move(public_path().'/uploads/blogs/',$document);
        }
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->img = $document;
        $blog->user_id = auth()->user()->id; 
        $blog->date = $request->bdate;
        $blog->desc = $request->desc;
        $blog->save();
        return redirect()->back()->withSuccess('Blog Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }
    public function details($id){
        $data['categories']=Category::get();
        $data['blog']=Blog::where('blogs.id','=',$id)->leftJoin('users','users.id','=','blogs.user_id')->leftJoin('categories','categories.id','=','blogs.category_id')->get()->first();
        return view('blog.blog_details',$data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories']=Category::get();
        $data['blog']=Blog::where('id','=',$id)->get()->first();
         return view('blog.edit_blog',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {   
       
        if (isset($request->bimg)) {
            $files = $request->file('bimg');
            $document = '/public/uploads/blogs/'.$files->getClientOriginalName();
            $files->move(public_path().'/uploads/blogs/',$document);
        }else{
             $blog=Blog::where('id','=',$request->id)->get()->first();
             $document =$blog['img'];
        }
        $blog = Blog::findorfail($request->id);
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->img = $document;
        $blog->user_id = auth()->user()->id; 
        $blog->date = $request->bdate;
        $blog->desc = $request->desc;
        $blog->save();
        return redirect()->back()->withSuccess('Blog Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Blog = Blog::findorfail($id)->delete();
        return redirect()->back()->withSuccess('Blog Deleted Successfully!');
    }
}
