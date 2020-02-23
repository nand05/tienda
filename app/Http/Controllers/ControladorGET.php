<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorGET extends Controller
{


    public function ShowPerfil(){
    	return view('Perfil');
    }

    public function ShowRegistro()
    {
    	return view('Registro');
    }

    public function ShowLogin(){
    	return view('Login');
    }
    public function ShowPlantilla()
    {
        return view('Plantilla');
    }
}
