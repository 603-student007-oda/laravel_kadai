
<form action="{{ route('messages.store') }}" method="post">
    @csrf
    <textarea name="content" rows="3" placeholder="メッセージを入力"></textarea><br>
    <button type="submit">登録</button>
</form>
@foreach($messages as $message)
    <p>
        {{ $message->user->name }}:{{ $message->created_at }}<br>
        {!! nl2br(e($message->content)) !!}<br>
        @if($message->user_id == Auth::id())
            <a href="{{ route('messages.show', $message->id) }}">編集</a><br>
        @else
            @if(Auth::user()->isLike($message->id))
                <form action="{{ route('likes.destroy') }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="message_id" value="{{ $message->id }}">
                    <button type="submit">イイネ！</button>
                </form>
            @else
                <form action="{{ route('likes.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="message_id" value="{{ $message->id }}">
                    <button type="submit">イイネ解除</button>
                </form>
            @endif
        @endif
    </p>
@endforeach
{{ $messages->links() }}