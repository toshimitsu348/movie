@extends('layouts.app')

@section('content')

<div class="container">
    <h1>掲示板</h1>

    <!-- 直前投稿エリア -->
    @foreach($posts as $post)
        <h2>タイトル：{{ $post->title }}</h2>
        <p>内容：{{ $post->content }}</p>
        <p>名前：{{ $post->name }}</p>
        <a href="/post/detail/{{$post->id}}" class="btn btn-primary">詳細</a>
    @endforeach



    <!-- フォームエリア -->
    <h2>フォーム</h2>
    <form action="/post/create" method="POST">
        <div class="form-group">
            <label for="title">タイトル</label>
            <input name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content">内容</label>
            <textarea name="content" rows="4" cols="40" id="content" class="form-control"></textarea>
        </div>

        {{ csrf_field() }}
        <button class="btn btn-success"> 送信 </button>
    </form>

</div>

@endsection