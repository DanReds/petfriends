<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Cliente;
use App\Usuario;

class FacturaController extends Controller
{
    //
    public function create(Request $request){

    	$facturas = new Factura();

    	$facturas-> iden_fact = $request -> iden_fact;
    	$facturas-> fech_fact = $request -> fech_fact;
    	$facturas-> iden_clie = $request -> iden_clie;
    	$facturas-> codi_usua = $request -> codi_usua;
    	$facturas-> save();
    	return redirect('/agregarfactura');
    }

    public function vista(){
    	$cli=Cliente::all();
    	$usu=Usuario::all();
    	return view('agregarfactura',compact('cli'), compact('usu'));
    }

    public function read(){
    	$facturas=Factura::all();
    	return view('vistafactura',['factura'=>$facturas]);

    }

}
