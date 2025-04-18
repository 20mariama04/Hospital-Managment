@extends('layouts.app')

@section('title', 'Tableau de Bord - Personnel Médical')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-8">
        <h1 class="text-3xl font-bold text-gray-900">Tableau de Bord</h1>
        <p class="mt-2 text-lg text-gray-600">Gestion des services médicaux</p>

        <!-- Grille de fonctionnalités -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
            <!-- Carte Gérer la Disponibilité -->
            <a href="{{ route('hospital.availability') }}" class="bg-blue-50 overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow border border-blue-100">
                <div class="p-6 flex flex-col items-center">
                    <svg class="w-10 h-10 text-blue-500 mb-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                    </svg>
                    <h3 class="text-lg font-medium text-blue-700">Gérer la Disponibilité</h3>
                    <p class="mt-2 text-sm text-blue-600">Lits et médecins</p>
                </div>
            </a>

            <!-- Carte Demandes d'Urgence -->
            <a href="{{ route('hospital.emergency-requests') }}" class="bg-red-50 overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow border border-red-100">
                <div class="p-6 flex flex-col items-center">
                    <svg class="w-10 h-10 text-red-500 mb-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4a1 1 0 112 0v1a1 1 0 11-2 0v-1zm0-8a1 1 0 112 0v5a1 1 0 11-2 0V6z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-medium text-red-700">Demandes d'Urgence</h3>
                    <p class="mt-2 text-sm text-red-600">Voir les demandes urgentes</p>
                </div>
            </a>

            <!-- Carte Rendez-vous -->
            <a href="{{ route('hospital.appointments') }}" class="bg-green-50 overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow border border-green-100">
                <div class="p-6 flex flex-col items-center">
                    <svg class="w-10 h-10 text-green-500 mb-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-medium text-green-700">Rendez-vous</h3>
                    <p class="mt-2 text-sm text-green-600">Gérer les consultations</p>
                </div>
            </a>

            <!-- Carte Notifications -->
            <a href="{{ route('hospital.notifications') }}" class="bg-gray-50 overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow border border-gray-200">
                <div class="p-6 flex flex-col items-center">
                    <svg class="w-10 h-10 text-gray-500 mb-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-700">Notifications</h3>
                    <p class="mt-2 text-sm text-gray-600">Envoyer des alertes santé</p>
                </div>
            </a>
        </div>

    <!-- Main Content -->
    <div class="flex-1 overflow-auto">
        <div class="p-8">
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900">Emergency Requests</h3>
                            <p class="text-3xl font-bold text-red-600">3</p>
                        </div>
                        <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900">Available Beds</h3>
                            <p class="text-3xl font-bold text-green-600">12</p>
                        </div>
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900">Active Doctors</h3>
                            <p class="text-3xl font-bold text-blue-600">8</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-lg shadow">
                <div class="p-6 border-b">
                    <h2 class="text-lg font-semibold text-gray-900">Recent Activity</h2>
                </div>
                <div class="p-6">
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">New patient admission</p>
                                <p class="text-sm text-gray-500">10 minutes ago</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="w-2 h-2 bg-green-600 rounded-full"></div>
                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">Updated bed availability</p>
                                <p class="text-sm text-gray-500">30 minutes ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection