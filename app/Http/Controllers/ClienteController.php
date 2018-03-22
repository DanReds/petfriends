<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    //
    public function create(Request $request){
	$cliente = new Cliente();

	$cliente -> iden_clie = $request -> iden_clie;
	$cliente -> pnom_clie = $request -> pnom_clie;
	$cliente -> snom_clie = $request -> snom_clie;
	$cliente -> pape_clie = $request -> pape_clie;
	$cliente -> sape_clie = $request -> sape_clie;
	$cliente -> emai_clie = $request -> emai_clie;
	$cliente -> dire_clie = $request -> dire_clie;

	$cliente -> save();
	return redirect('/ingresoclientes');
	}

	public function vista(){
		return view('agregarclientes');
	}
	public function read(){
		$cliente =Cliente::all();
		return view('vistaclie',['clientes'=>$cliente]);
	}
}
