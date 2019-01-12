<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaixaController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function calc(Request $request){
        $data = $request->all();

        $h = $data['altura_chapa_encomenda'];
        $l = $data['base_chapa_encomenda'];
        $w = $data['largura_chapa_encomenda'];

        $custo = ((($l * $w) + ($w * $h * 2) + ($l * $h * 2)) * $data['preco_chapa'] ) / ($data['base_chapa'] * $data['altura_chapa']);
        $venda = $custo  * $data['indice_ganho'] ;
        return view('Orcamento.orcamento_caixa', ['custo'=>$custo, 'venda'=>$venda]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

		return view('Orcamento.orcamento_caixa', ['custo'=>0, 'venda'=>0]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Clients $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show()
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Clients  $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit()
	{

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Clients  $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update()
	{

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Clients  $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy()
	{

	}
}
