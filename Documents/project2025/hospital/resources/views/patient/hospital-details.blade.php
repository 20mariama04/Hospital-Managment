@extends('layouts.app')

@section('title', 'Hospital Details')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Hospital Header -->
        <div class="relative h-64">
            <img src="{{ asset('images/hospital-cover.jpg') }}" alt="Hospital" class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-6">
                <h1 class="text-3xl font-bold text-white">Central Hospital</h1>
                <p class="text-white opacity-90">Specialized Care Center</p>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="grid grid-cols-3 gap-4 p-6 border-b">
            <div class="text-center">
                <div class="text-2xl font-bold text-green-600">12</div>
                <div class="text-sm text-gray-600">Available Beds</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-blue-600">15 min</div>
                <div class="text-sm text-gray-600">Wait Time</div>
            </div>
            <div class="text-center">
                <div class="text-2xl font-bold text-purple-600">8</div>
                <div class="text-sm text-gray-600">On-call Doctors</div>
            </div>
        </div>

        <!-- Hospital Info -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h2 class="text-xl font-semibold mb-4">Contact Information</h2>
                <div class="space-y-3">
                    <p class="flex items-center"><span class="w-20 text-gray-600">Address:</span> 123 Medical Center Ave</p>
                    <p class="flex items-center"><span class="w-20 text-gray-600">Phone:</span> +221 33 123 4567</p>
                    <p class="flex items-center"><span class="w-20 text-gray-600">Email:</span> contact@centralhospital.com</p>
                </div>
            </div>
            <div>
                <h2 class="text-xl font-semibold mb-4">Specialties</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Emergency Care</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Cardiology</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Pediatrics</span>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="p-6 bg-gray-50 flex gap-4">
            <button class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">
                Call Hospital
            </button>
            <button class="flex-1 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700">
                Get Directions
            </button>
        </div>
    </div>
</div>
@endsection