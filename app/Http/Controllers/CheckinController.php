<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use App\HealthStatus;

class CheckinController extends Controller
{

    public function index()
    {
        $citizens = Citizen::all();
        return view('checkin.index',compact('citizens'));
    }

    public function edit(Citizen $citizen)
    {
        return view('checkin.edit',compact('citizen'));
    }

    public function update(Citizen $citizen)
    {
        // dd(request()->all());
        // 1. update citizen's health status
        $HealthStatus = HealthStatus::create([
            'citizen_id' => $citizen->id,
            'ncd' => request('ncd') ? 1 : 0,
            'ncd_description' => request('ncd_description'),
            'covid_case' => request('covid_case') ? 1 : 0,
            'vaccine_effect' => request('vaccine_effect'),
        ]);

        // 2. redirect with success message
        return redirect()->route('checkin.index')->with('success-message','update successful');

    }
}
