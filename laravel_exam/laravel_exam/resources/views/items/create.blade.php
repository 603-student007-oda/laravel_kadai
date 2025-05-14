@extends('layouts.app')

@section('content')
        <h1>商品新規作成</h1>
        <form action="{{ route('items.store') }}" method="post">
            @csrf
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="nme"></dd>
                <dt>分類</dt>
                <dd><input type="text" name="category_id"></dd>
                <dt>価格</dt>
                <dd><input type="text" name="price"></dd>
            </dl>
            <button type="submit">登録する</button>
        </form>
        <hr>
        <a href="/">戻る</a>

@endsection