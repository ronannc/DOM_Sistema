<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $entradas = Accounts::where('tipo', '1')
		    ->whereMonth('created_at', date('m'))
		    ->whereYear('created_at', date('Y'))
	        ->get();
	    $valor_entrada = 0;
	    foreach ($entradas as $entrada){
	    	$valor_entrada = $valor_entrada + $entrada->valor;
	    }

	    $saidas = Accounts::where('tipo', '0')
		    ->whereMonth('created_at', date('m'))
		    ->whereYear('created_at', date('Y'))
		    ->get();

	    $valor_saida = 0;
	    foreach ($saidas as $saida){
		    $valor_saida = $valor_saida - $saida->valor;
	    }

	    $valor_fluxo = 0;
	    $fluxos = Accounts::all();
	    foreach ($fluxos as $fluxo){
		    if($fluxo->tipo){
			    $valor_fluxo = $valor_fluxo + $fluxo->valor;
		    }else{

			    $valor_fluxo = $valor_fluxo - $fluxo->valor;
		    }
	    }
	    return view('home', ['valor_fluxo' => $valor_fluxo, 'valor_entrada' => $valor_entrada, 'valor_saida' => $valor_saida]);
    }
}
