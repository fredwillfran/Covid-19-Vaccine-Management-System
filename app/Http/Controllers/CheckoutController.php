<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;

class CheckoutController extends Controller
{
    public function index()
    {
        $citizens = Citizen::all();
        return view('checkout.index',compact('citizens'));
    }

    public function edit(Citizen $citizen)
    {
        return view('checkout.edit',compact('citizen'));
    }

    public function update(Citizen $citizen)
    {
        // dd(request()->all());

        // 1. GET CITIZEN'S HEALTH STATUS
        $healthStatus = $citizen->healthStatus;

        // 2. UPDATE VACCINE EFFECT
        $healthStatus['vaccine_effect'] = $healthStatus['vaccine_effect'] . ' ' . request('vaccine_effect');
        $healthStatus->update();

        // 3. CONFIRM VACCINATION
        $citizen->increment('dose', 1);
        $citizen->update();

        // 4. redirect with success-message
        return redirect()->route('checkout.index')->with('success-message','update successful');
    }
}
