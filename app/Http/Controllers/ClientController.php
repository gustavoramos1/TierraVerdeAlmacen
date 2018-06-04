<?php

namespace TierrasVerdes\Http\Controllers;

use TierrasVerdes\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Client::all()->sortByDesc('id');
        return view('client.index')->with(compact('clients'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client=Client::all();
        return view('client.create')
        ->with(compact('client'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client=new Client($request->all());
        $client->save();
        return view(redirect()->route(client.index));
    }

    /**
     * Display the specified resource.
     *
     * @param  \TierrasVerdes\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        $client=findOrFail($id);
        return view(client.show)
        ->with(compact('client')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TierrasVerdes\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients = Client::FindOrFail($id);
        return view('client.edit')
        ->with(compact('clients',$clients));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TierrasVerdes\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clients = client::FindOrFail($id);
        $input = $request->all();
        $clients->fill($input)->save();
        
         return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TierrasVerdes\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client,$id)
    {
        $client=findOrFail($id);
        $client->delete();
        return view(redirect()->route(client.index));
    }
}
