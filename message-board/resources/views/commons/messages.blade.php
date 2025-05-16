<form action="{{ route('messages.store') }}" method="post">
    @csrf
    <textarea name="content" rows="3" placeholder="メッセージを入力"></textarea><br>
    <button type="submit">登録</button>
</form>
@foreach($messages as $message)
    <p>
        {{ $message->user->name }}:{{ $message->created_at }}<br>
        {!! nl2br(e($message->content)) !!}<br>
        <a href="{{ route('messages.show', $message->id) }}">編集</a>
    </p>
@endforeach
{{ $messages->links() }}