<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\VehicleController;
use App\Http\Livewire\Admin\LicenseRenewRequests;
use App\Http\Livewire\Admin\Permissions;
use App\Http\Livewire\Admin\Roles;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Admin\VehicleRegistrationRequests;
use App\Http\Livewire\ChangeVehicleOwnership;
use App\Http\Livewire\MyVehicles;
use App\Http\Livewire\RenewLicense;
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
Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('admin/roles', Roles::class)->name('roles');
    Route::get('admin/permissions', Permissions::class)->name('permissions');
    Route::get('admin/users', Users::class)->name('users');
    Route::get('admin/vehicles-registration-requests', VehicleRegistrationRequests::class)->name('registrationrequests');
    Route::get('admin/license-renew-requests', LicenseRenewRequests::class)->name('licenserenewrequests');
    Route::get('admin/vehicle-details/{id}', [VehicleController::class, 'viewVehicleDetails'])->name('vehicledetails');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('register-vehicle', VehicleRegistrationForm::class)->middleware(['auth'])->name('vehicleregister');
    Route::get('my-vehicles', MyVehicles::class)->name('myvehicles');
    Route::get('print-license/{id}', [CertificateController::class, 'printLicense'])->name('printlicense');
    Route::get('renew-license', RenewLicense::class)->name('renewLicense');
    Route::get('change-vehicle-ownership', ChangeVehicleOwnership::class)->name('changeOwneship');
    Route::get('change-owner/{id}', [VehicleController::class, 'changeOwner'])->name('changeowner');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
