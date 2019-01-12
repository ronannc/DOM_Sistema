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
	    $entradas = Accounts::where('type', '1')
		    ->where('parcelado', '0')
		    ->whereMonth('created_at', date('m'))
		    ->whereYear('created_at', date('Y'))
	        ->get();

	    $valeu_entrada = 0;
	    foreach ($entradas as $entrada){
	    	$valeu_entrada = $valeu_entrada + $entrada->value;
	    }

	    $saidas = Accounts::where('type', '0')
		    ->where('parcelado', '0')
		    ->whereMonth('created_at', date('m'))
		    ->whereYear('created_at', date('Y'))
		    ->get();

	    $valeu_saida = 0;
	    foreach ($saidas as $saida){
		    $valeu_saida = $valeu_saida + $saida->value;
	    }

	    $value_fluxo = 0;
	    $fluxos = Accounts::where('parcelado', '0')->get();
	    foreach ($fluxos as $fluxo){
		    if($fluxo->tipo){
			    $value_fluxo = $value_fluxo + $fluxo->value;
		    }else{

			    $value_fluxo = $value_fluxo - $fluxo->value;
		    }
	    }

	    $parcelas = Parcelas::whereMonth('date_parcela', date('m'))->get();
//	    var_dump($parcelas);
	    foreach ($parcelas as $parcela){
//	    	echo $parcela->value_parcela;
	    	$conta = Accounts::find($parcela->accounts_id);
	    	if($conta->tipo){
			    $value_fluxo = $value_fluxo + $parcela->value_parcela;
			    $valeu_entrada = $valeu_entrada + $parcela->value_parcela;
		    }else{
			    $value_fluxo = $value_fluxo - $parcela->value_parcela;
			    $valeu_saida = $valeu_saida + $parcela->value_parcela;
		    }
	    }

	    return view('home', ['value_fluxo' => $value_fluxo, 'value_entrada' => $valeu_entrada, 'value_saida' => $valeu_saida]);
    }
}
