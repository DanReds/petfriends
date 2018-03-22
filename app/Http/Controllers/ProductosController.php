<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;

class ProductosController extends Controller
{
    //
    public function create(Request $request){

    	
	$productos = new Productos();

	$productos -> iden_prod = $request -> iden_prod;
	$productos -> desc_prod = $request -> desc_prod;
	$productos -> iden_cate = $request -> iden_cate;

	$productos -> save();
	return redirect('/ingresoprod');
	}
	public function vista(){
		$categoria = Categorias::all();
		return view('agregarprod',compact('categoria'));
	}
	public function read(Request $request){
		$productos =Productos::all();
		return view('vistaprod',['producto'=>$productos]);
	}
}
