<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormuController extends Controller
{
    public function comprobarFormu(Request $req){
        $valdiator = Validator::make(
            $req->all(),
            [
                'dni' => 'required|regex:/^[0-9]{8}[A-Z]$',
                'email' => array('required', 'regex:/^ik012108[0-9]{2}@plaiaundi.(com|net)$'),
                'codigo' => 'required|regex:/^ab+\d*cc+\d*$/',
            ], $messages = [
                'dni.required' => 'Necesitamos saber tu dni',
                'dni.regex' => "Introduzca un :attribute valido",
            ]
        )->validate();

       
       
    }
}
