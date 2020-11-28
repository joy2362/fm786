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
        $category = Category::first();
        $post_ids = PostCategory::where('category_id', $category->id)->pluck('post_id')->toArray();
        //$posts = Post::whereIn('id', $post_ids)->where('status', 1)->orderBy('id', 'DESC')->paginate(21);
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('website.search', compact('category', 'posts', 'categories'));
    }

    //auto complete
    public function autoComplete(Request $request){
        if($request->get('query'))
        {
            //$query = $request->get('query');
            $data = Post::where('slug','LIKE','%'.$request->search.'%')->where('status', 1)->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
       <li><a href="#">'.$row->title.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }

    }
    public function getAutocompleteData(Request $request){
        if($request->has('term')){
            return  Post::where('slug','LIKE','%'.$request->term.'%')->where('status', 1)->get();
        }
    }
}
