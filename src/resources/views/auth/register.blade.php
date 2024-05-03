@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@section('login_register')
    <div class="main">
    @if(count($errors) > 0)
    <span class="validation">入力に問題があります</span>
    @endif
        <div class="main__inner">
            <div class="main__content">
                <h2>会員登録</h2>
                <form class="form__box" action="/register" method="POST">
                    @csrf
                    <input class="name" type="text" name="name" value="{{ old('name') }}" placeholder="名前">
                    @error('name')
                    <span class="validation">{{$errors->first('name')}}</span>
                    @enderror

                    <input class="email" type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
                    @error('email')
                    <span class="validation">{{$errors->first('email')}}</span>
                    @enderror

                    <input class="password" type="password" name="password" value="{{old('password')}}" placeholder="パスワード">
                    @error('password')
                    <span class="validation">{{$errors->first('password')}}</span>
                    @enderror

                    <input class="confirm__password" type="password" name="password_confirmation" placeholder="確認用パスワード">
                    @error('password_confirmation')
                    <span class="validation">{{$errors->first('password_confirmation')}}</span>
                    @enderror

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