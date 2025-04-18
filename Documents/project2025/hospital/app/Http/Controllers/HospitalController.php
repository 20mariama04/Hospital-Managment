<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital;

class HospitalController extends Controller
{
    public function dashboard()
    {
        return view('hospital.dashboard');
    }

    public function availability()
    {
        return view('hospital.availability');
    }

    public function emergencyRequests()
    {
        return view('hospital.emergency-requests');
    }

    public function appointments()
    {
        return view('hospital.appointments');
    }

    public function notifications()
    {
        return view('hospital.notifications');
    }

    public function showDoctors(Hospital $hospital)
    {
        return view('patient.hospital-doctors', [
            'hospital' => $hospital,
            'doctors' => $hospital->doctors
        ]);
    }

    public function findHospital()
    {
        $specialties = \App\Models\Specialty::all(); // Get all specialties
        $hospitals = \App\Models\Hospital::all(); // Or your hospital query
        
        return view('patient.find-hospital', [
            'specialties' => $specialties,
            'hospitals' => $hospitals
        ]);
    }
}
