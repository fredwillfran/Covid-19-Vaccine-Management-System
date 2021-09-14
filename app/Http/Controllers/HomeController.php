<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->isCheckin) {
            return view('users.checkin');
        }else if (auth()->user()->isCheckout == 1) {
            return view('users.checkout');
        }else {
            return view('home');
        }
    }
}
