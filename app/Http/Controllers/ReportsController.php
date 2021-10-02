<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizen;
use Illuminate\Support\Facades\DB;
use PDF;
use Carbon\Carbon;

class ReportsController extends Controller
{

    public function showCitizenReport()
    {

        $citizens = Citizen::where('district', '')->get();
        return view('reports.per_district.index', compact('citizens'));
    }

    public function reportCitizen()
    {
        // VALIDATE
        request()->validate([
            'city' => ['required'],
            'district' => ['required'],
            'dose' => ['required'],
        ]);

        // GET CITIZENS PER DISTRICT AND DOSE
        $citizens = Citizen::where('district', request('district'))
                            ->where('dose', request('dose'))->get();

        session()->put('district', request('district'));
        session()->put('dose', request('dose'));

        return view('reports.per_district.index', compact('citizens'));
    }

    public function citizen_export_pdf()
    {
        $citizens = Citizen::where('district', session('district'))
                            ->where('dose', session('dose'))->get();

        $pdf = PDF::loadView('reports.per_district.citizensList', compact('citizens'));

        return $pdf->download('citizensReport.pdf');
    }

    public function showGeneralCitizenReport()
    {
        $citizens = Citizen::where('updated_at','');
        return view('reports.general.index', compact('citizens'));
    }

    public function generalReportCitizen()
    {
        // VALIDATE
        request()->validate([
            'dose' => ['required'],
        ]);

        // GET CITIZENS VACCINATED TODAY
        $citizens = Citizen::whereDate('updated_at', Carbon::today())
                                ->where('dose',request('dose'))
                                ->get();

        session()->put('dose', request('dose'));

        return view('reports.general.index',compact('citizens'));
    }

    public function generalReport_export_pdf()
    {
        $citizens = Citizen::whereDate('updated_at', Carbon::today())
                                ->where('dose',session('dose'))
                                ->get();

        session()->put('date',Carbon::now()->format('d-m-Y'));

        $pdf = PDF::loadView('reports.general.citizensList', compact('citizens'))->setPaper('A4', 'portrait');

        return $pdf->download('citizens_General_Report.pdf');
    }
}
