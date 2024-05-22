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

}