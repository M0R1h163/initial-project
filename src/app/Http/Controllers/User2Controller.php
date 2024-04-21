<?php

namespace App\Http\Controllers;

use App\Models\User2;
use Illuminate\Http\Request;


class User2Controller extends Controller
{
    public function register(){
        return view('register');
    }

    public function create(Request $request){
        $form = $request->all();
        User2::create($form);
        return redirect('/');
    }
    
}
