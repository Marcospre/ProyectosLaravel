<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class FormController extends Controller
{
    public function logearUsuario(Request $req){
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required',
            'contrasena' => 'required'
        ]);

        if($validator->fails()){
            return redirect('entrada')
                ->withErrors($validator)
                ->withInput();
        }

        if(Auth::check()){
            return view('logeado');
        }else{
            return redirect('/inicio');
        }
    }


    public function registrarUsuario(Request $req){
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required',
            'contrasena' => 'required'
        ]);

        if($validator->fails()){
            return redirect('registro')
                ->withErrors($validator)
                ->withInput();
        }

        $alumno = Alumnos::create($req->all());
        $alumno->save();
        return redirect(url('/inicio'));
    }
}
