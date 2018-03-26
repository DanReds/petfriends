<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroP;
use App\Productos;
use App\Factura;
use Illuminate\Support\Facades\DB;


class RegistroPController extends Controller
{
    //
    public function create(Request $request){
    	$registrop = new RegistroP();

    	$registrop -> iden_prod = $request -> iden_prod;
    	$registrop -> iden_fact = $request -> iden_fact;
    	$registrop -> fech_fact = $request -> fech_fact;
    	$registrop -> cant_prod = $request -> cant_prod;
    	$registrop -> pvun_prod = $request -> pvun_prod;

    	$registrop -> save();
    	return redirect('/ingresoregistrop');
    }

    public function vista(){
    	$producto = Productos::all();
    	$factura = Factura::all();
    	return view('agregarregistrop', compact('producto','factura'));
    }

    public function read(Request $request){
    		$registrop = DB::table('registrop')
            ->select('iden_prod','iden_fact','fech_fact','cant_prod',DB::raw('(pvun_prod * cant_prod) as total'))
            ->orderBy('iden_fact')->get();
    		return view('vistaregistrop',['registro'=>$registrop]);

    }
}
