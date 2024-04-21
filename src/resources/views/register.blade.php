@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@section('login_register')
    <div class="main">
        <div class="main__inner">
            <div class="main__content">
                <h2>会員登録</h2>
                <form class="form__box" action="/register" method="POST">
                    @csrf
                    <input class="name" type="text" name="name" value="{{ old('name') }}" placeholder="名前">
                    <input class="email" type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
                    <input class="password" type="password" name="password" placeholder="パスワード">
                    <input class="confirm__password" type="password" name="password_confirmation" placeholder="確認用パスワード">
                    <input class="register__btn" type="submit"  value="会員登録">
                </form>
                    <p1>アカウントをお持ちの方はこちらから</p1>
                <div class="login__link">
                    <a href="/login" class="login">ログイン</a>
                </div>
            </div>
        </div>
    </div>
@endsection