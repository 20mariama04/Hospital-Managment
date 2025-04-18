@extends('layouts.app')

@section('title', 'Profile Settings')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-gray-900">Profile Settings</h1>
        </div>

        <div class="p-6">
            <form class="space-y-6">
                <!-- Profile Photo -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Profile Photo</label>
                    <div class="mt-2 flex items-center">
                        <img class="h-20 w-20 rounded-full" src="https://via.placeholder.com/80" alt="Profile photo">
                        <button type="button" class="ml-4 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50">
                            Change
                        </button>
                    </div>
                </div>

                <!-- Personal Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                        <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                </div>

                <!-- Emergency Contact -->
                <div class="border-t pt-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Emergency Contact</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Contact Name</label>
                            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Contact Phone</label>
                            <input type="tel" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Relationship</label>
                            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                    </div>
                </div>

                <!-- Notification Settings -->
                <div class="border-t pt-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Notification Preferences</h2>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label class="ml-2 block text-sm text-gray-900">
                                Email notifications for appointments
                            </label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label class="ml-2 block text-sm text-gray-900">
                                SMS notifications for appointments
                            </label>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection