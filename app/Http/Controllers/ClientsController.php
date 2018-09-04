<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
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
	    $clients = Clients::all();
	    return view('Clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clients.create', ['client' => new Clients()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$client = $request->all();
        Clients::create($client);
	    return redirect()-> route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clients $client
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Clients $client)
    {
//    	var_dump($client->id);
	    return view('Clients.show', compact('client'));
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

	    $client = Clients::findOrfail($id);
	    return view('Clients.edit', compact('client'));
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
	    $client = Clients::findOrfail($id);
	    $data = $request->all();
	    $client->fill($data);
	    $client->save();
	    return redirect()-> route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clients  $client
     *
     * @return \Illuminate\Http\Response
     */
	public function destroy(Clients $client)
    {
	    try {
		    $client->delete();
	    } catch ( \Exception $e ) {

	    }

	    return redirect()-> route('clients.index');
    }
}
