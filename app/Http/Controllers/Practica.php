<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practica extends Controller
{
    public function validarLogin(Request $request){
        $user = $request->input('user');
        $pass = $request->input('password');

        if ($user === 'urquidi' and $pass == 123){
            $url='entraste';
        } else {
            $url='fail';
        }
        return view($url,[
            'user'=>$request->input('user'),
        ]);
    }
}
