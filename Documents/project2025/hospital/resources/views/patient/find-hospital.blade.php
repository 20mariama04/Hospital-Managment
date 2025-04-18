@extends('layouts.app')

@section('title', 'Find Hospital')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Filter Section -->
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <h1 class="text-2xl font-bold mb-6">Find Nearby Hospitals</h1>
        
        <form method="GET" action="/find-hospital" class="space-y-4 md:space-y-0">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Location Filter -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Location</label>
                    <div class="relative">
                        <input type="text" name="location" placeholder="Enter location or use current location" 
                               class="w-full rounded-md border-gray-300 shadow-sm" id="location-input">
                        <button type="button" onclick="getLocation()" class="absolute right-2 top-2 text-gray-500 hover:text-blue-500">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Specialty Filter -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Specialty</label>
                    <select name="specialty" class="w-full rounded-md border-gray-300 shadow-sm">
                        <option value="">All Specialties</option>
                        @isset($specialties)
                            @foreach($specialties as $specialty)
                            <option value="{{ $specialty->id }}">{{ $specialty->name }}</option>
                            @endforeach
                        @endisset
                    </select>
                </div>

                <!-- Availability Filter -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Availability</label>
                    <select name="availability" class="w-full rounded-md border-gray-300 shadow-sm">
                        <option value="">All</option>
                        <option value="beds">Beds Available</option>
                        <option value="doctors">Doctor Present</option>
                        <option value="open">Open Now</option>
                    </select>
                </div>

                <!-- Search Button -->
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- View Toggle -->
    <div class="flex justify-between items-center mb-6">
        <div class="text-sm text-gray-500">
            Showing {{ $hospitals->count() }} hospitals
        </div>
        <div class="flex space-x-1">
            <button id="list-view" class="bg-blue-600 text-white px-4 py-2 rounded-l-lg">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                </svg>
            </button>
            <button id="map-view" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-r-lg">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Map View (Hidden by default) -->
    <div id="map-container" class="hidden mb-8 h-96 bg-gray-100 rounded-lg">
        <!-- Map will be loaded here via JavaScript -->
    </div>

    <!-- Hospital List -->
    <div id="hospital-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($hospitals as $hospital)
        <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-md transition-shadow">
            <!-- Hospital Header -->
            <div class="p-6 border-b">
                <div class="flex items-center space-x-4 mb-4">
                    <img src="{{ $hospital->logo_url ?? 'https://via.placeholder.com/80' }}" 
                         alt="{{ $hospital->name }}" class="h-12 w-12 rounded-full object-cover">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900">{{ $hospital->name }}</h3>
                        <div class="flex items-center text-sm text-gray-500">
                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <span>{{ $hospital->distance ?? '2.5' }} km away</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1 text-gray-600">{{ $hospital->rating ?? '4.5' }}/5</span>
                    </div>
                    <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                        {{ $hospital->wait_time ?? '15' }} min wait
                    </div>
                </div>
            </div>
            
            <!-- Hospital Details -->
            <div class="p-6">
                <!-- Specialties -->
                <div class="mb-4">
                    <h4 class="text-sm font-medium text-gray-700 mb-2">Specialties</h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach($hospital->specialties as $specialty)
                        <span class="px-3 py-1 rounded-full text-xs bg-blue-100 text-blue-800">{{ $specialty->name }}</span>
                        @endforeach
                    </div>
                </div>
                
                <!-- Availability Stats -->
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <div class="text-sm text-gray-500">Beds Available</div>
                        <div class="text-2xl font-bold text-gray-900">{{ $hospital->available_beds }}</div>
                    </div>
                    <div class="bg-gray-50 p-3 rounded-lg">
                        <div class="text-sm text-gray-500">Doctors On Duty</div>
                        <div class="text-2xl font-bold text-gray-900">{{ $hospital->active_doctors }}</div>
                    </div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="bg-gray-50 px-4 py-4 flex justify-between border-t">
                <button class="flex items-center text-blue-600 hover:text-blue-800">
                    <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    Call
                </button>
                <button class="flex items-center text-green-600 hover:text-green-800">
                    <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                    </svg>
                    Directions
                </button>
                <button onclick="toggleDoctors('{{ $hospital->id }}')" class="flex items-center text-purple-600 hover:text-purple-800">
                    <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Doctors
                </button>
            </div>
            
            <!-- Doctors Section -->
            <div id="doctors-{{ $hospital->id }}" class="hidden p-6 border-t">
                <h4 class="text-lg font-medium mb-4">Available Doctors</h4>
                <div class="space-y-4">
                    @foreach($hospital->doctors as $doctor)
                    <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                        <img src="{{ $doctor->image_url ?? 'https://via.placeholder.com/80' }}" 
                             alt="{{ $doctor->name }}" 
                             class="h-12 w-12 rounded-full object-cover mr-4">
                        <div class="flex-1">
                            <h5 class="font-medium">{{ $doctor->name }}</h5>
                            <p class="text-sm text-gray-500">{{ $doctor->specialty }}</p>
                            <p class="text-sm {{ $doctor->available ? 'text-green-600' : 'text-red-600' }}">
                                {{ $doctor->available ? 'Available Now' : 'Not Available' }}
                            </p>
                        </div>
                        <button class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                            Book
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    // Toggle between list and map views
    document.getElementById('list-view').addEventListener('click', function() {
        document.getElementById('hospital-list').classList.remove('hidden');
        document.getElementById('map-container').classList.add('hidden');
        this.classList.add('bg-blue-600', 'text-white');
        this.classList.remove('bg-gray-200', 'text-gray-700');
        document.getElementById('map-view').classList.remove('bg-blue-600', 'text-white');
        document.getElementById('map-view').classList.add('bg-gray-200', 'text-gray-700');
    });

    document.getElementById('map-view').addEventListener('click', function() {
        document.getElementById('hospital-list').classList.add('hidden');
        document.getElementById('map-container').classList.remove('hidden');
        this.classList.add('bg-blue-600', 'text-white');
        this.classList.remove('bg-gray-200', 'text-gray-700');
        document.getElementById('list-view').classList.remove('bg-blue-600', 'text-white');
        document.getElementById('list-view').classList.add('bg-gray-200', 'text-gray-700');
        
        // Initialize map here (would use Leaflet or Google Maps API)
        initMap();
    });

    function toggleDoctors(hospitalId) {
        const element = document.getElementById(`doctors-${hospitalId}`);
        element.classList.toggle('hidden');
    }
    
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }
    
    function showPosition(position) {
        document.getElementById('location-input').value = 
            position.coords.latitude + ", " + position.coords.longitude;
    }

    function initMap() {
        // Map initialization code would go here
        console.log("Map would be initialized here");
    }
</script>
@endsection