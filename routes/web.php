<?php

use App\Http\Controllers\ViewDetails as ControllersViewDetails;
use App\Http\Livewire\Admin\Permissions;
use App\Http\Livewire\Admin\Roles;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Admin\VehicleRegistrationRequests;
use App\Http\Livewire\Admin\ViewDetails;
use App\Http\Livewire\MyVehicles;
use App\Http\Livewire\VehicleRegistrationForm;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get();
Route::get('admin/roles', Roles::class)->name('roles');
Route::get('admin/permissions', Permissions::class)->name('permissions');
Route::get('admin/users', Users::class)->name('users');
Route::get('admin/vehicles-registration-requests', VehicleRegistrationRequests::class)->name('registrationrequests');
Route::get('admin/vehicle-details/{id}', [ControllersViewDetails::class, 'viewVehicleDetails'])->name('vehicledetails');
Route::get('register-vehicle', VehicleRegistrationForm::class)->middleware(['auth'])->name('vehicleregister');
Route::get('my-vehicles', MyVehicles::class)->name('myvehicles');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
