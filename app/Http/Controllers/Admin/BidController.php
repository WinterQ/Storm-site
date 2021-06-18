<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bid;
use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $bids = Bid::all();
//        if(request()->status==1){
//            $bids=Bid::where('status','1')->get();
//        }else if(request()->status==0){
//            $bids=Bid::where('status','0')->get();
//        }
        session(['status'=>request()->status]);
        return view('admin.bid.index',['bids'=>$bids]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('admin.bid.create',['clients'=>$clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bid::create([
            'client_id'=>$request->input('client_id'),
            'bid_date'=>$request->input('bid_date'),
            'status'=>$request->input('status')
        ]);
        return redirect()->back()->withSuccess('Заказ успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        $clients = Client::all();
        return view('admin.bid.edit',['bid'=>$bid,'clients'=>$clients]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        //dd($bid);
//        $bid->client_id=$request->client_id;
//        $bid->bid_date=$request->bid_date;
        $bid->status=!$bid->status;
        $bid->save();
        return redirect()->back()->withSuccess('Статус изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        $bid->delete();
        return redirect()->back()->withSuccess('Заявка была удалена');
    }
}
