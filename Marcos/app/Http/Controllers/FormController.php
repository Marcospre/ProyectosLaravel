<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class FormController extends Controller
{
    public function logearUsuario(Request $req){
        $encon = false;
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'contrasena' => 'required'
        ]);

        if($validator->fails()){
            return redirect('entrada')
                ->withErrors($validator)
                ->withInput();
        }

        $alumnos = Alumnos::all();

        foreach ($alumnos as $alumno) {
            if($alumno->name == $req->name){
                $encon = true;
                $email = $alumno->email;
               return view('logeado',compact('email'));    
            }
        }

        if($encon==false){
            return redirect(url('inicio'));
        }
       
    }


    public function registrarUsuario(Request $req){
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required',
            'contrasena' => 'required|regex:/^[a-zA-Z]\d+[a-zA-Z]$/'
        ]);

        if($validator->fails()){
            return redirect('registro')
                ->withErrors($validator)
                ->withInput();
        }

        $alumno = Alumnos::create([
            'name'=>$req['name'],
            'email'=>$req['email'],
            'contrasena'=>$req['contrasena']
        ]);

        return redirect(url('/inicio'));
    }
}
