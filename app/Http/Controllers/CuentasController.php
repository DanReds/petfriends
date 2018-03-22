<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cuentas;
use App\Naturaleza;
use App\clas_Cuentas;
class CuentasController extends Controller
{
    //
    public function create(Request $request){

    	
	$cuentas = new Cuentas();

	$cuentas -> codi_ctas = $request -> codi_ctas;
	$cuentas -> nomb_ctas = $request -> nomb_ctas;
	$cuentas -> codi_natu = $request -> codi_natu;
	$cuentas -> codi_clas = $request -> codi_clas;
	$cuentas -> auxi_ctas = $request -> auxi_ctas;
	

	$cuentas -> save();
	return redirect('/ingresoctas');
	}
	public function vista(){
		$nat=Naturaleza::all();
		$clas=clas_Cuentas::all();

		return view('agregarctas',compact('nat'),compact('clas'));
	}
	public function read(Request $request){
		$cuentas =Cuentas::all();
		return view('vistacuenta',['cuenta'=>$cuentas]);
	}
}
