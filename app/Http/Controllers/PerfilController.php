<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Perfil as Perfil;

class PerfilController extends Controller
{
    public function todos(){
        $carrs = Perfil::all();
      return view('mostrarcarr', ['carrs' => $carrs]);
      
    }

}
