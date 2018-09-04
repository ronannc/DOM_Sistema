<?php

namespace App\Http\Controllers;

use App\Providers;
use Illuminate\Http\Request;

class ProvidersController extends Controller
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
		$providers = Providers::all();
		return view('Providers.index', compact('providers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('Providers.create', ['provider' => new Providers()]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$provider = $request->all();
		Providers::create($provider);
		return redirect()-> route('providers.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Clients $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Providers $provider)
	{
		return view('Providers.show', compact('provider'));
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

		$provider = Providers::findOrfail($id);
		return view('Providers.edit', compact('provider'));
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
		$provider = Providers::findOrfail($id);
		$data = $request->all();
		$provider->fill($data);
		$provider->save();
		return redirect()-> route('providers.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Clients  $client
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Providers $provider)
	{
		try {
			$provider->delete();
		} catch ( \Exception $e ) {

		}

		return redirect()-> route('providers.index');
	}
}
