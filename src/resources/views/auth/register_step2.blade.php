@extends('layouts.app_register')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register_step2') }}">
@endsection

@section('content')
<div class="header">
    <h2 class="header_register">新規会員登録</h2>
    <div class="header_step1">STEP2 体重データ入力</div>
</div>

<form action="/register/step2" method="post" class="form">
    @csrf
    <div class="form__text">現在の体重</div>
    <div class="form__input">
        <input type="text" name="weight" value="{{ old('weight') }}" placeholder="現在の体重を入力">
    </div>
    <div class="form_error">
        @error('weight')
        {{ $message }}
        @enderro
    </div>

    <div class="form__text">目標の体重</div>
    <div class="form__input">
        <input type="text" name="target_weight" value="{{ old('target_weight') }}" placeholder="目標の体重">
    </div>
    <div class="form_error">
        @error('target_weight')
        {{ $message }}
        @enderro
    </div>

    <button type="submit" class="form__button">アカウント作成</button>
</form>

@endsection