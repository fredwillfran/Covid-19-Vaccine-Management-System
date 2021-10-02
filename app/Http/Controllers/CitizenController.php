<?php

namespace App\Http\Controllers;

use App\Citizen;
use Illuminate\Http\Request;
use App\HealthCenter;
use App\Appointment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SaveAppointment;
use App\Notifications\AppointmentSaved;
use App\Profile;
use Illuminate\Support\Facades\Notification;

class CitizenController extends Controller
{

    public function create()
    {
        $healthCenters = HealthCenter::all();
        return view('citizens.book-appointment',compact('healthCenters'));
    }

    public function store(Request $request)
    {
        // VALIDATE FORM
        $attributes =  $this->validateCitizen();

       // 1. SAVE CITIZEN
       $citizen = $this->saveCitizen($attributes);

       // 2. SAVE PROFILE
        $profile = Profile::create([
            'citizen_id' => $citizen->id,
            'user_id' => auth()->user()->id,
        ]);
        // 3. SAVE APPOINTMENT
        $appointment = $this->saveAppointment($citizen);

        // 4. SEND EMAIL NOTIFICATION
        Mail::to($citizen->email)->send(new SaveAppointment($appointment));

        // 5. SEND SMS NOTIFICATION
        Notification::send($citizen,new AppointmentSaved($citizen));

        return redirect()->route('home')->with('success-message','appointment saved successfully.we have sent you an email and SMS.');
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
            'phone' => '+25' . $attributes['phone'],
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
            'health_center_id' => HealthCenter::where('name', request('health_center'))->value('id'),
            'date' => Carbon::tomorrow()
            ]);
    }
}
