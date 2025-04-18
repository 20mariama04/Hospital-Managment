@extends('layouts.app')

@section('title', 'Tableau de bord Patient')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="py-8">
        <h1 class="text-3xl font-bold text-gray-900">Bienvenue</h1>
        
        <!-- Bannière de notification -->
        <div class="bg-blue-50 border-l-4 border-blue-400 p-4 my-4">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-blue-700">Vous avez un rendez-vous jeudi à 14h00</p>
                </div>
            </div>
        </div>

        <!-- Grille d'actions rapides -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            <a href="{{ route('patient.find-hospital') }}" class="bg-white overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900">Trouver un hôpital</h3>
                    <p class="mt-2 text-sm text-gray-500">Rechercher des hôpitaux à proximité</p>
                </div>
            </a>

            <a href="{{ route('patient.emergency') }}" class="bg-red-50 overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-red-700">Aide d'urgence</h3>
                    <p class="mt-2 text-sm text-red-500">Obtenir une assistance médicale immédiate</p>
                </div>
            </a>

            <a href="{{ route('appointments.index') }}" class="bg-white overflow-hidden shadow rounded-lg hover:shadow-md transition-shadow">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900">Mes rendez-vous</h3>
                    <p class="mt-2 text-sm text-gray-500">Voir et gérer vos rendez-vous</p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection