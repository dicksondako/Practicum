<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KekeOrderController extends Controller
{
            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keke_users = User::all()->where('user_type', 2);

        return view('order_keke')->with('keke_users', $keke_users);
    }
}
