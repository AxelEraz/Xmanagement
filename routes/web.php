<?php

use App\Http\Livewire\CreateShipment;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Deliveries;
use App\Http\Livewire\DeliverShipment;
use App\Http\Livewire\DetailShipment;
use App\Http\Livewire\Dev;
use App\Http\Livewire\Shipment;
use App\Http\Livewire\ShowShipments;
use App\Http\Livewire\Welcome;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Welcome::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    
    Route::get('/shipments', Shipment::class)->name('shipments');
    
    Route::get('/create-shipments', CreateShipment::class)->name('create-shipments');

    Route::get('/show-shipments', ShowShipments::class)->name('show-shipments');

    Route::get('/detail-shipment/{shipment:slug}', DetailShipment::class, 'detail')->name('detail-shipment');
    
    Route::get('/DEV', Dev::class)->name('dev');

    Route::get('/deliveries', Deliveries::class)->name('deliveries');
    
}); 