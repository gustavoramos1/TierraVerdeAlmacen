<?php

namespace TierrasVerdes\Http\Controllers;

use TierrasVerdes\Models\BuyoutDetail;
use Illuminate\Http\Request;

class BuyoutDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyoutDetail=Buyout::orderBy('id','ASC')->paginate(10);
        return view(buyoutDetail.index)
        ->with(compact('buyoutDetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyoutDetail=BuyoutDetail::all();
        return view(buyoutDetail.create)
        ->with(compact('buyoutDetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buyoutDetail=new BouyoutDetail($request->all());
        $buyoutDetail->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \TierrasVerdes\Models\BuyoutDetail  $buyoutDetail
     * @return \Illuminate\Http\Response
     */
    public function show(BuyoutDetail $buyoutDetail)
    {
        $buyoutDetail=BuyoutDetail::all();
        return view(buyoutDetail.show)
        ->with(compact('buyoutDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TierrasVerdes\Models\BuyoutDetail  $buyoutDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyoutDetail $buyoutDetail)
    {
        $buyoutDetail=BuyoutDetail::all();
        return view(buyoutDetail.edit)
        ->with(compact('buyoutDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TierrasVerdes\Models\BuyoutDetail  $buyoutDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyoutDetail $buyoutDetail)
    {
        $buyoutDetail=findOrFail($id);
        $buyoutDetail=fill($request->all());
        $buyoutDetail->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TierrasVerdes\Models\BuyoutDetail  $buyoutDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyoutDetail $buyoutDetail)
    {
        $buyoutDetail=findOrFail($id);
        $buyoutDetail->delete();
        return redirect()->route(byoutDetail.destroy);
    }
}
