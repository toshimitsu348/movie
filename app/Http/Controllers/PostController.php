<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Indexページの表示
    public function index() {
        $posts = Post::join('users', 'users.id', '=', 'posts.user_id')->select('posts.id', 'title', 'content','name')->orderBy('posts.created_at', 'desc')->get();
        return view('post.index', ['posts' => $posts]);
    }

    // 投稿内容詳細表示
    public function detail($id) {
        $post = Post::find($id);
        $comments = Comment::join('users', 'users.id', '=', 'comments.user_id')->where('post_id', $id)->get();
        return view('post.detail', ['post' => $post, 'comments' => $comments]);
    }

    // 投稿された内容を表示するページ
    public function store(Request $request) {
        // 投稿内容の受け取って変数に入れる
        $title = $request->title;
        $content = $request->content;

        // DBに指定したカラムを保存
        Post::create([
            'user_id' => Auth::id(),
            'title' => $title,
            'content' => $content
        ]);

        return redirect('/post');
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('post.edit', ['post' => $post]);
    }

    public function update(Request $request, $id) {

        Post::find($id)->update([

            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect("/post/detail/$id");
    }

}