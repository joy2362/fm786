<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\PostCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //search
    public function search(Request $request){
        $posts = Post::where('title','LIKE','%'.$request->search.'%')->orWhere('slug','LIKE','%'.$request->search.'%')->where('status', 1)->orderBy('id', 'DESC')->paginate(21);
        return view('website.search', compact( 'posts'));
    }

    public function getAutocompleteData($text){

        if($text){
            $post=Post::where('slug','LIKE','%'.$text.'%')->orWhere('title','LIKE','%'.$text.'%')->where('status', 1)->select("title")->get();
            return response()->json($post);
        }
    }

    public function archive(Request $request){
        $posts= Post::where('status',1)->whereDate('created_at',$request->date)->paginate(21);
        return view('website.archive',compact('posts'));
    }
}
