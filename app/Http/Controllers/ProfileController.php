<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Citizen;
use PDF;

class ProfileController extends Controller
{

    public function show($id)
    {
        $profile = Profile::where('user_id', $id)->get()->first();

        return view('profiles.show', compact('profile'));
    }

    public function downloadCertificate($id)
    {
        $citizen = Citizen::where('id', $id)->get()->first();

        $pdf = PDF::loadView('profiles.certificate', compact('citizen'));

        return $pdf->download('vaccination_certificate.pdf');
    }
}
