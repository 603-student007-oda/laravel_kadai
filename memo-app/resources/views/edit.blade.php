<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>memo-appアプリ</title>
    </head>
    <body>
        <h1>メモの編集</h1>
        <form action="{{ route('memos.update', $memo->id) }}" method="post">
            @csrf
            @method('patch')
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title" value="{{ $memo->title }}"></dd>
                <dt>本文</dt>
                <dd><textarea name="content" value="{{ $memo->content }}"></textarea></dd>
                <dt>更新日時：</dt>
                <dd><input type="date" name="updated_at" value="{{ $memo->updated_at }}"></dd>
            </dl>
            <button type="submit">更新する</button>
        </form>
        <hr>
        <a href="/">戻る</a>
    </body>
</html>