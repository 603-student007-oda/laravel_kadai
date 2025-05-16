@extends('layouts.app')

@section('content')
<h1>メッセージ編集</h1>
<p>
    <form action="{{ route('messages.edit', $message) }}">
        <button type="submit">編集する</button>
    </form>
    <a href="{{ route('home', $message) }}">キャンセル</a>

    <form action="{{ route('messages.destroy', $message) }}" method="post" id="delete-form">
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
    </script>
</p>
<dl>
    <dt>メッセージ</dt>
    <dd> {!! nl2br(e($message->content)) !!}</dd>
</dl>
@endsection