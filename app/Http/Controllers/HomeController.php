<?php

namespace App\Http\Controllers;

use App\Parcelas;
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
		    ->where('parcelado', '0')
		    ->whereMonth('created_at', date('m'))
		    ->whereYear('created_at', date('Y'))
	        ->get();

	    $valor_entrada = 0;
	    foreach ($entradas as $entrada){
	    	$valor_entrada = $valor_entrada + $entrada->valor;
	    }

	    $saidas = Accounts::where('tipo', '0')
		    ->where('parcelado', '0')
		    ->whereMonth('created_at', date('m'))
		    ->whereYear('created_at', date('Y'))
		    ->get();

	    $valor_saida = 0;
	    foreach ($saidas as $saida){
		    $valor_saida = $valor_saida + $saida->valor;
	    }

	    $valor_fluxo = 0;
	    $fluxos = Accounts::where('parcelado', '0')->get();
	    foreach ($fluxos as $fluxo){
		    if($fluxo->tipo){
			    $valor_fluxo = $valor_fluxo + $fluxo->valor;
		    }else{

			    $valor_fluxo = $valor_fluxo - $fluxo->valor;
		    }
	    }

	    $parcelas = Parcelas::whereMonth('data_parcela', date('m'))->get();
//	    var_dump($parcelas);
	    foreach ($parcelas as $parcela){
//	    	echo $parcela->valor_parcela;
	    	$conta = Accounts::find($parcela->accounts_id);
	    	if($conta->tipo){
			    $valor_fluxo = $valor_fluxo + $parcela->valor_parcela;
			    $valor_entrada = $valor_entrada + $parcela->valor_parcela;
		    }else{
			    $valor_fluxo = $valor_fluxo - $parcela->valor_parcela;
			    $valor_saida = $valor_saida + $parcela->valor_parcela;
		    }
	    }

	    return view('home', ['valor_fluxo' => $valor_fluxo, 'valor_entrada' => $valor_entrada, 'valor_saida' => $valor_saida]);
    }
}