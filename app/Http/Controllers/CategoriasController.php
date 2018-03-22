<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorias;

class CategoriasController extends Controller
{
    //
    public function create(Request $request){
	$categorias = new Categorias();

	$categorias -> iden_cate = $request -> iden_cate;
	$categorias -> nomb_cate = $request -> nomb_cate;

	$categorias -> save();
	return redirect('/ingresocategoria');
	}

	public function vista(){
		return view('agregarcate');
	}

	public function read(Request $request){
		$categorias =Categorias::all();
		return view('vistacate',['categoria'=>$categorias]);
	}


}
