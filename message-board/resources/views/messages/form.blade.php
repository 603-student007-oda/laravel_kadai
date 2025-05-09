@csrf
<dl>
    <dd>
    <textarea name="content" rows="5" placeholder="メッセージを入力">{{ old('content', $message->content) }}</textarea>
    </dd>
</dl>