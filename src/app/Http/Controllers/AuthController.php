<?php

namespace App\Http\Controllers;

// useに該当のモデルを表記するバックスラで繋げて

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AuthorRequest;

class AuthController extends Controller
{
    public function stamp()
    {
        return view("stamp");
    }

    public function date(){
        return view('date');
    }
    //リクエスト内容の送信(register)
    // public function store(AuthorRequest $request){
        // $form = $request->all();
        // User::create($form);//Userモデルにデータを作成(送信)
        // return redirect('/login');}

    //作成したユーザー情報の表示＿Laravel入門0-15〜データの追加Eloquentを使用してデータを保存しよう〜

}