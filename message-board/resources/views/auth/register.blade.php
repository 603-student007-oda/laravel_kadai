<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <header>
            <div class="container">
                <a class="brand" href="/">{{ config('app.name') }}
            </div>
        </header>
        <main>
            <div class="container"> -->
                @extends('layouts.app')

                @section('content')
                <h1>会員登録</h1>
                @include('commons.flash')
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <p>
                        <label>名前</label><br>
                        <input type="text" name="name" value="{{ old('name') }}">
                    </p>
                    <p>
                        <label>メールアドレス</label><br>
                        <input type="email" name="email" value="{{ old('email') }}">
                    </p>
                    <p>
                        <label>パスワード</label><br>
                        <input type="password" name="password" value="">
                    </p>
                    <p>
                        <label>パスワード確認</label><br>
                        <input type="password" name="password_confirmation" value="">
                    </p>
                    <p>
                        <button type="submit">会員登録</button>
                    </p>
                    <p>または</p>
                    <p>
                        <a href="{{ route('login') }}">ログイン</a>
                    </p>
                </form>
                @endsection
            <!-- </div>
        </main>
    </body>
</html> -->