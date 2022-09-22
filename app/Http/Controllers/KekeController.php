<?php

namespace App\Http\Controllers;

use App\Models\KekeOrder;
use App\Models\User;
use Illuminate\Http\Request;

class KekeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keke_users = User::all()->where('user_type', 2);

        return view('keke.index')->with('keke_users', $keke_users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('keke.create')->with('id', $id);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'location'=>'required',
            'keke_user'=>'required',
        ]);

        $keke_order = new KekeOrder();
        $keke_order->location = $request->input('location');
        $keke_order->keke_user = $request->input('keke_user');;
        $keke_order->user_id = auth()->user()->id;
        $keke_order->status = 1;
        $query = $keke_order->save();

        if($query)
        {
            return back()->with(session()->flash('message', 'Ooooopppssss! Course already on the list'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
