<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>memo-appアプリ</title>
    </head>
    <body>
        <h1>メモ一覧</h1>
        <h2>{{ $memo->title }}</h2>
        <p>タイトル{{ $memo->title }}</p>
        <p>本文{!! nl2br(e($memo->content)) !!}</p>
        <p>作成日時：{{ $memo->created_at }}</p>
        <p>更新日時：{{ $memo->updated_at }}</p>
        <a href="{{ route('memos.edit', $memo->id) }}">編集する</a>
        <a href="/">メモ一覧へ</a>
        <hr>
        <form action="{{ route('memos.destroy', $memo->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">削除する</button>
        </form>
    </body>
</html>