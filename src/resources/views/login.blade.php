@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@section('login_register')
    <div class="main">
        <div class="main__inner">
            <div class="main__content">
                <h2>ログイン</h2>
                <form class="form__box" action="/" method="GET" >
                    @csrf
                    <input class="email" type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
                    <input class="password" type="text" name="password" placeholder="パスワード">
                    <input class="login__btn" type="submit"  value="ログイン">
                </form>
                    <p1>アカウントをお持ちでない方はこちらから</p1>
                <div class="register__link">
                    <a href="/register" class="register">会員登録</a>
                </div>
            </div>
        </div>
    </div>
@endsection