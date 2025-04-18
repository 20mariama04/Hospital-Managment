@extends('layouts.app')

@section('title', 'Bienvenue sur Sama Santé')

@section('content')
<div class="min-h-screen bg-gray-50 flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl w-full space-y-8 text-center">
        <div>
            <h1 class="text-4xl font-extrabold text-gray-900">Bienvenue sur Sama Santé</h1>
            <p class="mt-2 text-lg text-gray-600">Votre plateforme d'accès aux soins médicaux au Sénégal</p>
        </div>

        <!-- Cartes de sélection -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-10">
            <a href="{{ route('patient.dashboard') }}" class="bg-white p-6 rounded-lg shadow hover:shadow-md transition border border-gray-200">
                <div class="flex flex-col items-center">
                    <svg class="w-10 h-10 text-blue-500 mb-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a4 4 0 00-4 4v2a4 4 0 004 4 4 4 0 004-4V6a4 4 0 00-4-4zM3 14a7 7 0 0114 0v1H3v-1z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-800">Je suis un Patient</h3>
                    <p class="mt-2 text-sm text-gray-500">Accédez à vos services médicaux</p>
                </div>
            </a>

            <a href="{{ route('hospital.dashboard') }}" class="bg-white p-6 rounded-lg shadow hover:shadow-md transition border border-gray-200">
                <div class="flex flex-col items-center">
                    <svg class="w-10 h-10 text-green-500 mb-3" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-3a1 1 0 100 2 1 1 0 000-2zm1 4H9v3a1 1 0 102 0v-3z" />
                    </svg>
                    <h3 class="text-lg font-semibold text-gray-800">Personnel Médical</h3>
                    <p class="mt-2 text-sm text-gray-500">Gestion des établissements de santé</p>
                </div>
            </a>

            <a href="{{ route('emergency') }}" class="bg-red-50 p-6 rounded-lg shadow hover:shadow-md transition border border-red-200">
                <div class="flex flex-col items-center">
                    <svg class="w-10 h-10 text-red-600 mb-3" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4a1 1 0 112 0v1a1 1 0 11-2 0v-1zm0-8a1 1 0 112 0v5a1 1 0 11-2 0V6z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-semibold text-red-700">Aide d'Urgence</h3>
                    <p class="mt-2 text-sm text-red-600">Assistance médicale immédiate</p>
                </div>
            </a>
        </div>

        <!-- Pied de page -->
        <div class="mt-12 text-sm text-gray-500">
            <p>+100 hôpitaux partenaires • Accès rapide • Assistance 24h/24</p>
            <p class="mt-2">Contact : contact@samasante.sn | +221 33 123 45 67</p>
        </div>
    </div>
</div>
@endsection
