@extends('layouts.app')

@section('title', 'Medical Records')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Header -->
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-gray-900">Medical Records</h1>
            <p class="text-gray-600">View and manage your medical history</p>
        </div>

        <!-- Tabs -->
        <div class="border-b">
            <nav class="flex -mb-px">
                <button class="px-6 py-3 border-b-2 border-blue-500 text-blue-600 font-medium">
                    Past Consultations
                </button>
                <button class="px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-gray-700">
                    Prescriptions
                </button>
                <button class="px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-gray-700">
                    Lab Results
                </button>
            </nav>
        </div>

        <!-- Records List -->
        <div class="divide-y">
            <div class="p-6 hover:bg-gray-50">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">General Consultation</h3>
                        <p class="text-sm text-gray-500">Dr. Sarah Johnson • January 15, 2024</p>
                        <p class="mt-2 text-gray-600">Routine check-up and blood pressure monitoring</p>
                    </div>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-sm text-blue-600 hover:bg-blue-50 rounded">
                            View Details
                        </button>
                        <button class="px-3 py-1 text-sm text-gray-600 hover:bg-gray-50 rounded">
                            Download
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Privacy Notice -->
        <div class="p-6 bg-gray-50">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-gray-900">Privacy Notice</h3>
                    <p class="mt-1 text-sm text-gray-500">
                        Your medical records are protected under HIPAA guidelines. Only authorized personnel can access this information.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection