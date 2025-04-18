@extends('layouts.app')

@section('title', 'Manage Availability')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-gray-900">Manage Hospital Availability</h1>
            <p class="text-gray-600">Update resource availability and capacity</p>
        </div>

        <div class="p-6">
            <!-- Bed Capacity Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold mb-4">Bed Capacity</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">Emergency Ward</label>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="form-input rounded-md w-20" value="12">
                            <span class="ml-2 text-sm text-gray-500">/ 20 total</span>
                        </div>
                    </div>

                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">General Ward</label>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="form-input rounded-md w-20" value="45">
                            <span class="ml-2 text-sm text-gray-500">/ 60 total</span>
                        </div>
                    </div>

                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">ICU</label>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="form-input rounded-md w-20" value="8">
                            <span class="ml-2 text-sm text-gray-500">/ 15 total</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Availability Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold mb-4">Doctor Availability</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Emergency Doctors</label>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span>Dr. Smith</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Dr. Johnson</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">General Practitioners</label>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span>Dr. Williams</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Dr. Brown</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Emergency Requests Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold mb-4">Emergency Requests</h2>
                <div class="border rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Patient</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10:30 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">John Doe</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pending</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <button class="text-blue-600 hover:text-blue-900 mr-2">Accept</button>
                                    <button class="text-red-600 hover:text-red-900">Reject</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09:15 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Jane Smith</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Accepted</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <button class="text-blue-600 hover:text-blue-900">View</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Activity Section -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Recent Activity</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-500 pl-4 py-2">
                        <p class="text-sm text-gray-600">Updated ICU bed count to 8/15</p>
                        <p class="text-xs text-gray-500">10 minutes ago</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4 py-2">
                        <p class="text-sm text-gray-600">Accepted emergency request from John Doe</p>
                        <p class="text-xs text-gray-500">25 minutes ago</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4 py-2">
                        <p class="text-sm text-gray-600">Dr. Johnson marked as unavailable</p>
                        <p class="text-xs text-gray-500">1 hour ago</p>
                    </div>
                </div>
            </div>
                            <span class="ml-2 text-sm text-gray-500">/ 60 total</span>
                        </div>
                    </div>

                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">ICU</label>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="form-input rounded-md w-20" value="5">
                            <span class="ml-2 text-sm text-gray-500">/ 10 total</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doctor Availability Section -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold mb-4">Doctor Availability</h2>
                <div class="bg-white rounded-lg border">
                    <div class="p-4">
                        <div class="grid grid-cols-4 gap-4">
                            <div class="col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Department</label>
                                <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option>Emergency</option>
                                    <option>Cardiology</option>
                                    <option>Pediatrics</option>
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Doctor</label>
                                <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option>Dr. John Smith</option>
                                    <option>Dr. Sarah Johnson</option>
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Shift</label>
                                <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option>Morning</option>
                                    <option>Afternoon</option>
                                    <option>Night</option>
                                </select>
                            </div>
                            <div class="col-span-1">
                                <label class="block text-sm font-medium text-gray-700">Status</label>
                                <select class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                    <option>Available</option>
                                    <option>On Call</option>
                                    <option>Off Duty</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wait Time Estimates -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Wait Time Estimates</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">Emergency Department</label>
                        <div class="mt-2">
                            <input type="number" class="form-input rounded-md w-20" value="15">
                            <span class="ml-2 text-sm text-gray-500">minutes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 bg-gray-50 flex justify-end">
            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                Update Availability
            </button>
        </div>
    </div>
</div>
@endsection