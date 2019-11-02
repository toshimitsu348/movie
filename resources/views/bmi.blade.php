@extends('layouts.app')

@section('content')

<div class="container">
  <h1>bmi計算ページ</h1>
  <form method="post">
  @csrf
    <div class="form-group">
      <label for="height">身長(cm)</label>
      <input type="text" name="height" id="height" class="form-control">
    </div>
    <div class="form-group">
      <label for="weight">体重(kg)</label>
      <input type="text" name="weight" id="weight" class="form-control">
    </div>
    <div>
      <button type="submit" class="btn btn-primary">送信</button>
    </div>
  </form>
  @isset($bmi)
    <p>あなたのbmiは{{ $bmi }}です。</p>
  @endisset
</div>

@endsection