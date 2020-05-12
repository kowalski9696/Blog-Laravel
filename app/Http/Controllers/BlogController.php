<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Posts;
use App\category;

class BlogController extends Controller
{
 public function index(posts $posts){
     $category_widget = Category::all();
     $data = $posts->latest()->take(4)->get();
     return view('blog',compact('data','category_widget'));
 }

 public function isi_blog($slug){
    $category_widget = Category::all();
    $data = posts::where('slug',$slug)->get();
    return view('blog.isi_post', compact('data','category_widget'));
 }
 public function list_blog(){
    $category_widget = Category::all();
    $data = posts::latest()->paginate(5);
    return view('blog.list_post',compact('data,','category_widget'));
   } 
   public function list_category(category $category){
    $category_widget = Category::all();
    $data = $category->posts()->paginate(6);
    return view('blog.list_post',compact('data','category_widget'));

   }

   public function cari(request $request){
    $category_widget = Category::all();
    $data = Posts::where('judul',$request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
    return view('blog.list_post',compact('data','category_widget'));
}
}
