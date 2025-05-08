<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>picture-bookアプリ</title>
    </head>
    <body>
        <h1>動物詳細</h1>
        <h2>{{ $animal->name }}</h2>
        <p>説明：{{ $animal->description }}</p>
        <p>画像ファイル名：{{ $animal->image }}</p>
        <a href="/">戻る</a>
        </body>
</html>