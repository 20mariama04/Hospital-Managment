<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function hospitalStaff()
    {
        return redirect()->route('hospital.dashboard');
    }
    
    public function emergencyHelp()
    {
        return redirect()->route('patient.emergency');
    }

    public function index()
    {
        return redirect()->route('patient.dashboard');
    }

    public function patientDashboard()
    {
        return view('patient.dashboard');
    }

    public function findHospital()
    {
        $hospitals = Hospital::all();
        return view('patient.find-hospital', compact('hospitals'));
    }

    public function hospitalDetails($id)
    {
        return view('patient.hospital-details', ['id' => $id]);
    }

    public function emergency()
    {
        return view('patient.emergency');
    }

    public function appointmentsIndex()
    {
        return view('patient.appointments');
    }

    public function appointmentsCreate()
    {
        return view('patient.create-appointment');
    }

    public function appointmentsStore(Request $request)
    {
        // Handle appointment creation
        return redirect()->route('appointments.index');
    }
}