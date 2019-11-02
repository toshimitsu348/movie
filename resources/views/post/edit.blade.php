@extends('layouts.app')

@section('content')

<div class="container">
    <h1>投稿内容 編集画面</h1>
    <form method="POST">
        <div class="form-group">
            <label for="title">タイトル</label>
          <input name="title" id="title" class="form-control" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="content">内容</label>
          <textarea name="content" rows="4" cols="40" id="content" class="form-control">{{$post->content}}</textarea>
        </div>

        {{ csrf_field() }}
        <button class="btn btn-success"> 送信 </button>
    </form>
</div>

@endsection 