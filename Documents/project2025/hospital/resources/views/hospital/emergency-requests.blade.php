@extends('layouts.app')

@section('title', 'Emergency Requests')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Emergency Requests</h1>
                <p class="text-gray-600">Active emergency assistance requests</p>
            </div>
            <div class="flex space-x-2">
                <select class="rounded-md border-gray-300 shadow-sm">
                    <option>All Departments</option>
                    <option>Emergency</option>
                    <option>ICU</option>
                </select>
                <select class="rounded-md border-gray-300 shadow-sm">
                    <option>All Status</option>
                    <option>New</option>
                    <option>In Progress</option>
                </select>
            </div>
        </div>

        <!-- Real-time Requests List -->
        <div class="divide-y">
            <!-- Emergency Request Item -->
            <div class="p-6 hover:bg-gray-50">
                <div class="flex items-start space-x-6">
                    <div class="flex-shrink-0">
                        <div class="w-4 h-4 bg-red-600 rounded-full animate-pulse"></div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-medium text-gray-900">
                                Emergency Assistance #2024-001
                            </h2>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                New Request
                            </span>
                        </div>
                        <div class="mt-2 grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-500">Patient Location</p>
                                <p class="text-sm font-medium text-gray-900">2.5 km away</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Request Time</p>
                                <p class="text-sm font-medium text-gray-900">2 minutes ago</p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="h-32 bg-gray-100 rounded-lg">
                                <!-- Map View -->
                                <div class="h-full flex items-center justify-center text-gray-500">
                                    Map View
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0 space-y-2">
                        <button class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                            Accept
                        </button>
                        <button class="w-full bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">
                            Details
                        </button>
                    </div>
                </div>
            </div>

            <!-- Additional Emergency Request Items -->
            <div class="p-6 hover:bg-gray-50">
                <div class="flex items-start space-x-6">
                    <div class="flex-shrink-0">
                        <div class="w-4 h-4 bg-yellow-600 rounded-full"></div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-medium text-gray-900">
                                Emergency Assistance #2024-002
                            </h2>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                In Progress
                            </span>
                        </div>
                        <div class="mt-2 grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-500">Patient Location</p>
                                <p class="text-sm font-medium text-gray-900">1.8 km away</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Request Time</p>
                                <p class="text-sm font-medium text-gray-900">5 minutes ago</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink-0">
                        <button class="w-full bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300">
                            View Status
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection