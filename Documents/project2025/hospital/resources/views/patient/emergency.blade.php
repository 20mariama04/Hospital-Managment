@extends('layouts.app')

@section('title', 'Emergency Help')

@section('content')
<div class="min-h-screen bg-red-50 flex items-center justify-center px-4">
    <div class="max-w-md w-full text-center">
        <div class="bg-white rounded-lg shadow-xl p-8">
            <div class="animate-pulse mb-6">
                <div class="w-16 h-16 bg-red-600 rounded-full mx-auto flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-4">Contacting the nearest emergency hospital...</h2>
            
            <div class="text-5xl font-bold text-red-600 mb-6" id="countdown">3</div>

            <div class="space-y-4 mb-6">
                <div class="flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <span class="text-gray-600">Location Sharing: Active</span>
                </div>
                <div class="flex items-center justify-center space-x-2">
                    <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z" />
                    </svg>
                    <span class="text-gray-600">Silent Mode: ON</span>
                </div>
            </div>

            <button class="w-full bg-gray-200 text-gray-700 font-semibold py-3 px-4 rounded-lg hover:bg-gray-300 transition-colors">
                Cancel Emergency Request
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
    let countdown = 3;
    const countdownElement = document.getElementById('countdown');
    
    const timer = setInterval(() => {
        countdown--;
        countdownElement.textContent = countdown;
        
        if (countdown <= 0) {
            clearInterval(timer);
            // Redirect or show confirmation
        }
    }, 1000);
</script>
@endpush
@endsection