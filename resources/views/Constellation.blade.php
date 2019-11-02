<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
        <h1>正座判定ページです。</h1>
        <form method="post">
        @csrf
          <div>
            <input type="text" name="month" id="month">
            <label for="month">月</label>
            <input type="text" name="day" id="day">
            <label for="day">日</label>
          </div>
          <div>
            <button type="submit">送信</button>
          </div>
        </form>
        @isset($constellation)
          <p>あなたの星座は{{ $constellation }}です。</p>
        @endisset
    </body>
</html>
