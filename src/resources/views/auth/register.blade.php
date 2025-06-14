@extends('layouts.app_register')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register') }}">
@endsection

@section('content')
<div class="header">
    <h2 class="header_register">新規会員登録</h2>
    <div class="header_step1">STEP1 アカウント情報の登録</div>
</div>

<form action="/register/step2" method="post" class="form">
    @csrf
    <div class="form__text">お名前</div>
    <div class="form__input">
        <input type="text" name="name" value="{{ old('name') }}" placeholder="名前を入力">
    </div>
    <div class="form_error">
        @error('name')
        {{ $message }}
        @enderror
    </div>

    <div class="form__text">メールアドレス</div>
    <div class="form__input">
        <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力">
    </div>
    <div class="form_error">
        @error('email')
        {{ $message }}
        @enderror
    </div>

    <div class="form__text">パスワード</div>
    <div class="form__input">
        <input type="password" name="password" value="{{ old('password') }}" placeholder="パスワードを入力">
    </div>
    <div class="form_error">
        @error('password')
        {{ $message }}
        @enderror
    </div>

    <button type="submit" class="form__button">次に進む</button>
</form>

<div class="login">
    <a href="/login">ログインはこちら</a>
</div>
@endsection