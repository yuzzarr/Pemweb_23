<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function Daftar(){
        return view('User.Daftar');
    }

    public function actionDaftar(Request $request){
        
    }
}
