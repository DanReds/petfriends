<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\clas_Cuentas;

class ControllerCuentas extends Controller
{
    //
    public function create(Request $request){

    	$clas_cuentas=new Clas_Cuentas();
    	$clas_cuentas-> codi_clas = $request -> codi_clas;
    	$clas_cuentas-> nomb_clas = $request -> nomb_clas;
    	$clas_cuentas-> save();
    	return redirect('/crear_clas'); 
    }


    public function vista(){

    	return view('agregarClas');

    }

    public function read(Request $request){

    	$clas_cuentas=Clas_cuentas::all();
    	return view ('vistaClas', ['clas_ctas'=>$clas_cuentas]); 
    }

}