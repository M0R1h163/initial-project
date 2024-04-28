@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('login_register')
    <div class="main">
        <div class="main__inner">
            <div class="main__content">
                <h2>ログイン</h2>
                <form class="form__box" action="/login" method="POST" >
                    @csrf
                    <input class="email" type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
                    <input class="password" type="text" name="password" placeholder="パスワード">
                    <button class="login__btn" type="submit">ログイン</button>
                </form>
                    <p1>アカウントをお持ちでない方はこちらから</p1>
                <form class="register__link" action="/register" method="GET">
                    <button class="register">会員登録</button>
                </form>
            </div>
        </div>
    </div>
@endsection