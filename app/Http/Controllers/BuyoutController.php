<?php

namespace TierrasVerdes\Http\Controllers;

use TierrasVerdes\Models\Buyout;
use Illuminate\Http\Request;

class BuyoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyout=Buyout::orderBy('id')->paginate(10);
        return view(buyout.index);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyout=Buyout::all();
        return view(buyout.create)
        ->with(compact('buyout'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buyout=new Buyout($request->all());
        $buyout->save();
        return redirect()->route(buyout.index);
    }

    /**
     * Display the specified resource.
     *
     * @param  \TierrasVerdes\Models\Buyout  $buyout
     * @return \Illuminate\Http\Response
     */
    public function show(Buyout $buyout,$id)
    {
        $buyout=findOrFail($id);
        return view(buyout.show)
        ->with(compact('buyout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TierrasVerdes\Models\Buyout  $buyout
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyout $buyout,$id)
    {
        $buyout=findOrFail($id);
        return view(buyout.edit)
        ->with(compact('buyout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TierrasVerdes\Models\Buyout  $buyout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyout $buyout,$id)
    {
        $buyout=findOrFail($id);

        $buyout=fill($request->all());
        $buyout->save();
        return redirect()->route(buyout.index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TierrasVerdes\Models\Buyout  $buyout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyout $buyout,$id)
    {
        $buyout=findOrFail($id);
        $buyout->delete();
        return redirect()->route(buyout.index);
    }
}
