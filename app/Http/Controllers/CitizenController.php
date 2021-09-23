<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;
use App\HealthCenter;
use App\Appointment;
use Illuminate\Support\Carbon;

class CitizenController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $healthCenters = HealthCenter::all();
        return view('citizens.book-appointment',compact('healthCenters'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        // VALIDATE FORM
        $attributes =  $this->validateCitizen();

       // 1. SAVE CITIZEN
       $citizen = $this->saveCitizen($attributes);

        // 2. SAVE APPOINTMENT
        $appointment = $this->saveAppointment($citizen);

        // 3. SEND EMAIL NOTIFICATION

        // 4. SEND SMS NOTIFICATION

        return redirect()->route('home')->with('success-message','appointment saved successfully.we have sent you an email.');
    }

    public function edit(Citizen $citizen)
    {
        //
    }

    public function update(Request $request, Citizen $citizen)
    {
        //
    }

    protected function validateCitizen()
    {
        return request()->validate(
            [
                'national_id' => 'required',
                'firstname' => 'required',
                'lastname' => 'required',
                'dob' => 'required',
                'phone' => 'required | max:10',
                'city' => 'required',
                'district' => 'required',
                'sector' => 'required',
                'gender' => 'required',
                'dose' => 'required',
                'health_center' => 'required | exists:health_centers,name',
            ]
        );
    }

    protected function saveCitizen($attributes)
    {
        return Citizen::create([
            'national_id' => $attributes['national_id'],
            'firstname' => $attributes['firstname'],
            'lastname' => $attributes['lastname'],
            'email' => auth()->user()->email,
            'phone' => $attributes['phone'],
            'city' => $attributes['city'],
            'district' => $attributes['district'],
            'sector' => $attributes['sector'],
            'dob' => $attributes['dob'],
            'gender' => $attributes['gender']
            ]);
    }

    protected function saveAppointment($citizen)
    {
        return Appointment::create([
            'citizen_id' => $citizen['id'],
            'date' => Carbon::tomorrow()
            ]);
    }
}
