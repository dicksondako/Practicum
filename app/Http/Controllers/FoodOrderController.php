<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FoodOrderController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food_users = User::all()->where('user_type', 3);

        return view('order_food')->with('food_users', $food_users);
    }
}
