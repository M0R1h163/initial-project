<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',//リクエスト、文字列、確認用パスワードと一致を条件？　文字数いる？
            'password_confirmation' =>'required|string',
        ];
    }

    //エラーメッセージの指定（カスタム）
    public function messages()
    {
        return[
            'name.required' => '名前を入力してください' ,//rulesの該当して欲しいルールがname.で続く
            'email.required' => 'メールアドレスを入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.confirmed' => 'パスワードが違います',//rulesの該当して欲しいルールがpassword.で続く、この時は入力と確認が一致すること
            'password_confirmation.required' => '再度パスワードを入力してください',
        ];
    }
}