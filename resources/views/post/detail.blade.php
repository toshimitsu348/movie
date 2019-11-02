@extends('layouts.app')

@section('content')

<div class="container">
    <h1>掲示板</h1>
    <div class="border">
        <h3>{{$post->title}}</h3>
        <a class="pl-3 btn btn-success" href="/post/edit/{{$post->id}}">編集</a>
        <p>{{$post->content}}</p>
    </div>

    <form action="/comment/create" method="POST">
        <div class="form-group">
            <label for="comment">コメント</label>
            <textarea name="comment" rows="4" cols="40" id="comment" class="form-control"></textarea>
        </div>
        {{ csrf_field() }}
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <button class="btn btn-success"> 送信 </button>
    </form>

    @foreach($comments as $comment)

        <p>コメント：{{ $comment->content }}</p>
        <p>名前：{{ $comment->name }}</p>
        <a class="pl-3 btn btn-success" href="/comment/edit/{{$comment->id}}">編集</a>

    @endforeach
</div>

@endsection