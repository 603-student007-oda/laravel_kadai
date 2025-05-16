<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>memo-appアプリ</title>
    </head>
    <body>
        <h1>メモの新規作成</h1>
        <form action="{{ route('memos.store') }}" method="post">
            @csrf
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title"></dd>
                <dt>本文</dt>
                <dd><textarea name="content" cols="30" rows="5"></textarea></dd>
                <dt>作成日時：</dt>
                <dd><input type="date" name="created_at"></dd>
            </dl>
            <button type="submit">登録する</button>
        </form>
        <hr>
        <a href="/">戻る</a>
    </body>
</html>