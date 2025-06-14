@extends('layouts.app_register')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login') }}">
@endsection

@section('content')
    <h2 class="header_register">ログイン</h2>

<from class="form" action="/login" method="post">
    @csrf
    <div class="form__group">

        <div class="form__group--text">メールアドレス</div>
        <div class="form__group--input">
            <input type="email" name="email" placeholder="メールアドレスを入力" value="{{ old('email') }}">
        </div>
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
        </div>

        <div class="form__group--text">パスワード</div>
        <div class="form__group--input">
            <input type="email" name="email" placeholder="パスワードを入力" value="{{ old('password') }}">
        </div>
        <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
        </div>
    </div>

    <div class="form__button">
        <button type="submit">ログイン</button>
    </div>    
</from>

<div class="link">
    <a href="/register/step1">アカウント作成はこちらから</a>
</div>

@endsection