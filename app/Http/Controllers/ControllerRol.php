<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class ControllerRol extends Controller
{
    //
    public function create(Request $request){

    	$rol=new Rol();
    	$rol-> iden_rol = $request -> iden_rol;
    	$rol-> nomb_rol = $request -> nomb_rol;
    	$rol-> save();
    	return redirect('/create'); 
    }


    public function vista(){

    	return view('agregar');

    }

    public function read(Request $request){

    	$rol=Rol::all();
    	return view ('vista', ['roles'=>$rol]); 
    }

}