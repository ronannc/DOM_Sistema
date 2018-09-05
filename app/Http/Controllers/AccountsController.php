<?php

namespace App\Http\Controllers;

use App\Accounts;
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
		return view('Accounts.create', ['account' => new Accounts()]);
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
		Accounts::create($account);
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
