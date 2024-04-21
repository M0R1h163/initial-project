<?php

namespace App\Http\Controllers;

// useに該当のモデルを表記するバックスラで繋げて
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // バリデーション
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // ログインの試行
        if (Auth::attempt($credentials)) {
            // 認証に成功した場合の処理
            return redirect()->intended('/'); // ログイン後のリダイレクト先
        } else {
            // 認証に失敗した場合の処理
            return back()->withErrors(['email' => '認証情報が正しくありません。']); // エラーメッセージを表示してログインフォームにリダイレクト
        }
    }
}