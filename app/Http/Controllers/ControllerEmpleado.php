<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
class ControllerEmpleado extends Controller
{
     public function create(Request $request){

    	$empleado=new Empleado();
    	$empleado-> dire_empl = $request -> dire_empl;
    	$empleado-> iden_empl = $request -> iden_empl;
    	$empleado-> pape_empl = $request -> pape_empl;
    	$empleado-> pnom_empl = $request -> pnom_empl;
    	$empleado-> sape_empl = $request -> sape_empl;
    	$empleado-> snom_empl = $request -> snom_empl;
    	$empleado-> save();
    	return redirect('/crearEmple'); 
    }


    public function vista(){

    	return view('agregarEmpleado');

    }

    public function read(Request $request){

    	$empleado=Empleado::all();
    	return view ('vistaEmpleado', ['emple'=>$empleado]); 
    }
}
