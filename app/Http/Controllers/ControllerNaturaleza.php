<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Naturaleza;

class ControllerNaturaleza extends Controller
{
    public function create(Request $request){

    	$naturaleza=new Naturaleza();
    	$naturaleza-> codi_natu = $request -> codi_natu;
    	$naturaleza-> nomb_natu = $request -> nomb_natu;
    	$naturaleza-> save();
    	return redirect('/crear_natu'); 
    }


    public function vista(){

    	return view('agregarNatu');

    }

    public function read(Request $request){

    	$naturaleza=Naturaleza::all();
    	return view ('vistaNatu', ['natu_ctas'=>$naturaleza]); 
    }
}
