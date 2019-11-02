@extends('layouts.app')

@section('content')

<div class="container">
  <h1>bmi計算ページ</h1>
  <form method="post">
  @csrf
    <div class="form-group">
      <label for="contributor">タイトル</label>
      <input type="text" name="contributor" id="contributor" class="form-control">
    </div>
    <div class="form-group">
      <label for="content">内容</label>
      <input type="text" name="content" id="content" class="form-control">
    </div>
    <div>
      <button type="submit" class="btn btn-primary">投稿</button>
    </div>
  </form>
  
  @isset($content)
    <p>あなたのbmiは{{ $content }}です。</p>
  @endisset
</div>

@endsection