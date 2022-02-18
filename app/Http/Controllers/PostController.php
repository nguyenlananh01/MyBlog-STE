<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $post = DB::table('posts')
            ->join('categories','posts.cate_id', '=', 'categories.cate_id')
            ->join('users', 'posts.user_id', '=', 'users.user_id')
            ->join('tags', 'posts.tag_id', '=', 'tags.tag_id')
            ->select('posts.content','posts.post_id','posts.title','posts.image','posts.created_at', 'users.name AS userName', 'tags.name AS tagName', 'categories.name AS cateName')
            ->get();

        $latestPost = DB::table('posts')
                ->orderBy('created_at', 'desc')
                ->paginate(3);

        return view('pages.blog-left-sidebar',
            [
                'post' => $post,
                'latestPost' => $latestPost
            ]);
    }

    public function detail($id){
        $postDetail = DB::table('posts')
            ->join('categories','posts.cate_id', '=', 'categories.cate_id')
            ->join('users', 'posts.user_id', '=', 'users.user_id')
            ->join('tags', 'posts.tag_id', '=', 'tags.tag_id')
            ->select('posts.content','posts.title','posts.image','posts.created_at', 'users.name AS userName', 'tags.name AS tagName', 'categories.name AS cateName')
            ->where('post_id','=',$id)
            ->get();

//        $getComment = DB::table('comments')
//            ->join('posts','comments.post_id','=','posts.post_id')
//            ->join('users','comments.user_id','=','users.user_id')
//            ->select('comments.content','comment.created_at','users.name')
//            ->get();

        return view ('pages.blog-detail',[
            'postDetail' => $postDetail
//            'getComment' => $getComment

        ]);
    }


}
