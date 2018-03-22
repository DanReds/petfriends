<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;

class ProveedoresController extends Controller
{
    //
    public function create(Request $request){

    	
	$provedores = new Proveedores();

	$provedores -> nit_prov = $request -> nit_prov;
	$provedores -> rasz_prov = $request -> rasz_prov;
	$provedores -> dire_prov = $request -> dire_prov;

	$provedores -> save();
	return redirect('/ingresoprov');
	}
	public function vista(){
		return view('agregarprov');
	}
	public function read(Request $request){
		$provedores =Proveedores::all();
		return view('vistaprov',['provedor'=>$provedores]);
	}
}
