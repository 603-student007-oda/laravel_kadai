@extends('layouts.app')

@section('content')
<h1>マイページ</h1>

@include('commons.messages')
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <input type="submit" value="ログアウト">
</form>

@endsection