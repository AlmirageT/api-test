<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\Post;
use Log;

class PostController extends Controller
{
    public function index(){
        if(Cache::has('posts')){
            $posts = Cache::get('posts');
        }else{
            $posts = Post::orderBy('id', 'desc')->limit(5)->get();
            Cache::put('posts', $posts, 60);
        }
        return response()->json(["message" => "OK", "data" => $posts]);
    }

    public function store(Request $request){
        $newPost = new Post();
        $newPost->title = $request->title;
        $newPost->body = $request->body;
        $newPost->user_id = Auth::user()->id;
        $newPost->save();
        Cache::forget('posts');
        return response()->json(["message" => "OK", "data" => $newPost]);
    }

    public function getUserPosts(){
        if(Auth::user()){
            $posts = Post::where('user_id', Auth::user()->id)->get();
            return response()->json(["message" => "OK", "data" => $posts]);
        }
        return response()->json(["message" => "ERROR", "data" => null]);

    }

    public function update(Request $request, $id){
        $getPostUpdate = Post::find($id);
        $getPostUpdate->title = $request->title;
        $getPostUpdate->body = $request->body;
        $getPostUpdate->user_id = Auth::user()->id;
        $getPostUpdate->save();
        Cache::forget('posts');
        return response()->json(["message" => "OK", "data" => $getPostUpdate]);
    }

    public function destroy($id){
        Post::destroy($id);
        Cache::forget('posts');
        return response()->json(["message" => "OK"]);
    }


}
