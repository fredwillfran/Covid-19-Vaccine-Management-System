<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        if (auth()->user()->isCheckin || auth()->user()->isCheckout) {
            return view('home');
        }elseif (auth()->user()->role_id === 1) {
            Session::flush();
            Auth::logout();
            return view('forbidden');
        }else {
            return view('homepage');
        }
    }
}
