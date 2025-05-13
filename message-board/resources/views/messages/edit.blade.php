@extends('layouts.app')

@section('content')
<h1>メッセージ編集</h1>

@include('commons.flash')

<form action="{{ route('messages.update', $message->id) }}" method="post">
@method('patch')
@include('messages.form')
<button type="submit">更新する</button>
<a href="{{ route('home', $message) }}">キャンセル</a>
</form>

<form action="{{ route('messages.destroy', $message) }}" method="post" id="delete-form">
    <button onclick="deleteMessage()">削除</button>
    @csrf
    @method('delete')
</form>
<script type="text/javascript">
    function deleteMessage() {
        event.preventDefault();
        if (window.confirm('本当に削除しますか？')) {
            document.getElementById('delete-form').submit();
        }
    }

@endsection