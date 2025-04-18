@extends('layouts.app')

@section('title', 'Appointments')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">My Appointments</h1>
                    <p class="text-gray-600">Manage your medical appointments</p>
                </div>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Book New Appointment
                </button>
            </div>
        </div>

        <!-- Upcoming Appointments -->
        <div class="p-6 border-b">
            <h2 class="text-lg font-semibold mb-4">Upcoming Appointments</h2>
            <div class="space-y-4">
                <div class="border rounded-lg p-4 hover:bg-gray-50">
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/48" alt="Doctor">
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-medium text-gray-900">Dr. Sarah Johnson</h3>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Confirmed
                                </span>
                            </div>
                            <p class="text-gray-600">Cardiology</p>
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                Thursday, March 15, 2024 • 2:00 PM
                            </div>
                        </div>
                        <div class="ml-4 flex-shrink-0 space-y-2">
                            <button class="w-full bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">
                                Reschedule
                            </button>
                            <button class="w-full text-red-600 px-4 py-2 rounded hover:bg-red-50">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Form -->
        <div class="p-6">
            <h2 class="text-lg font-semibold mb-4">Book an Appointment</h2>
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Specialty</label>
                        <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            <option>Select Specialty</option>
                            <option>Cardiology</option>
                            <option>Pediatrics</option>
                            <option>General Medicine</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Doctor</label>
                        <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            <option>Select Doctor</option>
                            <option>Dr. Sarah Johnson</option>
                            <option>Dr. John Smith</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Time</label>
                        <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            <option>9:00 AM</option>
                            <option>10:00 AM</option>
                            <option>11:00 AM</option>
                            <option>2:00 PM</option>
                            <option>3:00 PM</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Reason for Visit</label>
                    <textarea rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                        Confirm Booking
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection