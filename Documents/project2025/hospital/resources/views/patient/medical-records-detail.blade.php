@extends('layouts.app')

@section('title', 'Medical Records')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-gray-900">Medical Records</h1>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Download Records
                </button>
            </div>
        </div>

        <!-- Medical History Tabs -->
        <div class="border-b">
            <nav class="flex -mb-px">
                <button class="px-6 py-3 border-b-2 border-blue-500 text-blue-600 font-medium">
                    Consultations
                </button>
                <button class="px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-gray-700">
                    Prescriptions
                </button>
                <button class="px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-gray-700">
                    Lab Results
                </button>
                <button class="px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-gray-700">
                    Vaccinations
                </button>
            </nav>
        </div>

        <!-- Records Content -->
        <div class="p-6">
            <!-- Consultation Records -->
            <div class="space-y-6">
                <div class="border rounded-lg p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">General Consultation</h3>
                            <p class="text-sm text-gray-500">Dr. Sarah Johnson • Cardiology</p>
                            <p class="mt-2 text-gray-600">Blood pressure: 120/80 mmHg</p>
                            <p class="text-gray-600">Heart rate: 72 bpm</p>
                            <p class="text-gray-600">Notes: Regular checkup, all vitals normal</p>
                        </div>
                        <div class="text-right">
                            <span class="text-sm text-gray-500">March 15, 2024</span>
                        </div>
                    </div>
                </div>

                <div class="border rounded-lg p-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Follow-up Visit</h3>
                            <p class="text-sm text-gray-500">Dr. John Smith • General Medicine</p>
                            <p class="mt-2 text-gray-600">Temperature: 37.2°C</p>
                            <p class="text-gray-600">Weight: 70 kg</p>
                            <p class="text-gray-600">Notes: Patient reports improved condition</p>
                        </div>
                        <div class="text-right">
                            <span class="text-sm text-gray-500">March 1, 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection