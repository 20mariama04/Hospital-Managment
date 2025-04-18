<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;

// Universal Entry Page
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

// Role Selection Routes
Route::get('/patient', [HomeController::class, 'patientDashboard'])->name('patient.dashboard');
Route::get('/hospital-staff', [HospitalController::class, 'dashboard'])->name('hospital.dashboard');
Route::get('/emergency', [HomeController::class, 'emergency'])->name('emergency');

// Patient Routes
Route::prefix('patient')->group(function () {
    // Change this line:
    Route::get('/home', [HomeController::class, 'patientDashboard'])->name('home');
    
    // To:
    Route::get('/dashboard', [HomeController::class, 'patientDashboard'])->name('patient.dashboard');
    Route::get('/find-hospital', [HomeController::class, 'findHospital'])->name('patient.find-hospital');
    Route::get('/hospital/{id}', [HomeController::class, 'hospitalDetails'])->name('patient.hospital-details');
    Route::get('/emergency', [HomeController::class, 'emergency'])->name('patient.emergency');
    
    // Appointments
    Route::get('/appointments', [HomeController::class, 'appointmentsIndex'])->name('patient.appointments.index');
    Route::get('/appointments/create', [HomeController::class, 'appointmentsCreate'])->name('patient.appointments.create');
    Route::post('/appointments', [HomeController::class, 'appointmentsStore'])->name('patient.appointments.store');
});

// Hospital Staff Routes
Route::prefix('hospital')->group(function() {
    Route::get('/dashboard', [HospitalController::class, 'dashboard'])->name('hospital.dashboard');
    Route::get('/hospital/availability', [HospitalController::class, 'availability'])->name('hospital.availability');
    Route::get('/emergency-requests', [HospitalController::class, 'emergencyRequests'])->name('hospital.emergency-requests');
    Route::get('/appointments', [HospitalController::class, 'appointments'])->name('hospital.appointments');
    Route::get('/notifications', [HospitalController::class, 'notifications'])->name('hospital.notifications');
    
    Route::get('/hospital/{hospital}/doctors', [HospitalController::class, 'showDoctors'])->name('patient.hospital-doctors');
});

// Appointments Routes
Route::get('/appointments', [HomeController::class, 'appointmentsIndex'])->name('appointments.index');
Route::get('/appointments/create', [HomeController::class, 'appointmentsCreate'])->name('appointments.create');
Route::post('/appointments', [HomeController::class, 'appointmentsStore'])->name('appointments.store');
Route::get('/find-hospital', [HospitalController::class, 'findHospital'])->name('find.hospital');
