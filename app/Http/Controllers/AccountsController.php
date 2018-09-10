<?php

namespace App\Http\Controllers;

use App\Accounts;
use App\Clients;
use App\Parcelas;
use App\Providers;
use Illuminate\Http\Request;

class AccountsController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$accounts = Accounts::all();
		return view('Accounts.index', compact('accounts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$clients = Clients::all();
		$providers = Providers::all();
		return view('Accounts.create', ['account' => new Accounts(), 'parcelas' => new Parcelas(), 'clients' => $clients, 'providers'=> $providers]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$account = $request->all();
		$aux = Accounts::create([
			'nome' => $account['nome'],
			'valor'=> $account['valor'],
			'tipo'=> $account['tipo'],
			'client_id'=> $account['client_id'],
			'provider_id'=> $account['provider_id'],
			'parcelado'=> $account['parcelado'],
			'parcelas'=> $account['parcelas'],
			'entrada' => $account['entrada']
		]);
		if($account['parcelado']){
			for($i = 1; $i <= $account['parcelas']; $i = $i + 1){
				Parcelas::create([
					'accounts_id' => $aux->id,
					'valor_parcela' => $account['valor'] / $account['parcelas'],
					'data_parcela' => now()->addMonth($i - $account['entrada']),
				]);
			}
		}
		return redirect()-> route('accounts.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Clients $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Accounts $account)
	{
		return view('accounts.show', compact('account'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Clients  $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{

		$account = Accounts::findOrfail($id);
		return view('Accounts.edit', compact('account'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Clients  $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id)
	{
		$account = Accounts::findOrfail($id);
		$data = $request->all();
		$account->fill($data);
		$account->save();
		return redirect()-> route('accounts.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Clients  $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Accounts $account)
	{
		try {
			$account->delete();
		} catch ( \Exception $e ) {

		}

		return redirect()-> route('accounts.index');
	}
}
