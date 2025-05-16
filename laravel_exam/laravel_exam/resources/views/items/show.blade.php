@extends('layouts.app')

@section('content')
<h1>商品詳細</h1>

<h2>{{ $item->name }}</h2>
<p>ID：{{ $item->id }}</p>
<p>分類：{{ $item->category_id }}</p>
<p>価格：{{ $item->price }}</p>
<a href="/">戻る</a>

@endsection