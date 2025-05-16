<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
    </head>
    <body>
        <main>
            <div class="container">
                @yield('content')
            </div>
        </main>
    </body>
</html>