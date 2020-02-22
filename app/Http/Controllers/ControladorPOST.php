<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class ControladorPOST extends Controller
{
    //

    public function RegistrarUsuario(Request $request)
    {
        $data = array('email' => $request->input('email'), 
                      'password' => $request->input('password'),
                      'nombre' => $request->input('nombre'),
                      'apellido_paterno' => $request->input('apellido_paterno'),
                      'apellido_materno' => $request->input('apellido_materno') 
                     );
        $validator = Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'apellido_paterno' => ['required', 'string', 'max:255'],
            'apellido_materno' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            # code...
            return "the task fail";
        }else{
            return User::create([
                'nombre' => $data['nombre'],
                'apellidos' => $data['apellido_paterno']." ".$data['apellido_paterno'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }

        //return $request;
    }
}
