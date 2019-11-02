@extends('layouts.app')

@section('content')

<div class="container">
    <h1>コメント 編集画面</h1>
    <form method="POST">
      <div class="form-group">
          <label for="content">コメント</label>
          <textarea name="content" rows="4" cols="40" id="content" class="form-control">{{$comment->content}}</textarea>
      </div>
      {{ csrf_field() }}
      <input type="hidden" name="post_id" value="{{$comment->post_id}}">
      <button class="btn btn-success"> 送信 </button>
    </form>
</div>

@endsection 