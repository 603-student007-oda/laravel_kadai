@extends('layouts.app')

@section('content')

<h1>商品一覧</h1>

<p><a href="{{ route('items.create') }}">＋新規作成</a></p>

    @foreach ($items as $item)
        <p>
            <a href="{{ route('items.show', $item->id) }}">
                {{ $item->name }}
            </a>
        </p>
    @endforeach

@endsection