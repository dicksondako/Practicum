<?php

namespace App\Http\Controllers;

use App\Models\FoodOrder;
use App\Models\User;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food_users = User::all()->where('user_type', 3);

        return view('food.index')->with('food_users', $food_users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('food.create')->with('id', $id);;
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
            'food_type'=>'required',
            'qty'=>'required',
            'food_user'=>'required',
        ]);

        $food_order = new FoodOrder();
        $food_order->user_id = auth()->user()->id;
        $food_order->location = $request->input('location');
        $food_order->food_type = $request->input('food_type');
        $food_order->qty = $request->input('qty');
        $food_order->restaurant_user_id = $request->input('food_user');
        $food_order->status = 1;
        $query = $food_order->save();

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
        //
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
