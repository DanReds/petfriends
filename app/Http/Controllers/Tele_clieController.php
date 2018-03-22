<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tele_clie;
use App\Cliente;
class Tele_clieController extends Controller
{
    //
    public function create(Request $request){
    	$tele_clie = new Tele_clie();
    	$tele_clie -> iden_clie = $request -> iden_clie;
    	$tele_clie -> tlef_clie = $request -> tlef_clie;

    	$tele_clie -> save();

    	return redirect('/agregartel');

    }
    public function vista(){
    	$cliente = Cliente::all();
    	return view('agregartele', compact('cliente'));	
    }
    public function read(Request $request){
    	$tele_clie =Tele_clie::all();
    	return view('vistaTele_clie',['telf_clie'=>$tele_clie]);
    }

}
