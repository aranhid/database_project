<?php

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
    return view('index');
});

Use App\Http\Controllers\StaffController;
Route::resource('staff', StaffController::class);

Use App\Http\Controllers\PositionController;
Route::resource('positions', PositionController::class);

Use App\Http\Controllers\ClientController;
Route::resource('clients', ClientController::class);

Use App\Http\Controllers\CarManufacturerController;
Route::resource('car_manufacturers', CarManufacturerController::class);

Use App\Http\Controllers\CarModelController;
Route::resource('car_models', CarModelController::class);

Use App\Http\Controllers\CarGenerationController;
Route::resource('car_generations', CarGenerationController::class);

Use App\Http\Controllers\CarBodyTypeController;
Route::resource('car_body_types', CarBodyTypeController::class);

Use App\Http\Controllers\CarBodyColorController;
Route::resource('car_body_colors', CarBodyColorController::class);

Use App\Http\Controllers\CarDriveTypeController;
Route::resource('car_drive_types', CarDriveTypeController::class);

Use App\Http\Controllers\CarTransmissionTypeController;
Route::resource('car_transmission_types', CarTransmissionTypeController::class);

Use App\Http\Controllers\FuelTypeController;
Route::resource('fuel_types', FuelTypeController::class);

Use App\Http\Controllers\CarStatusController;
Route::resource('car_statuses', CarStatusController::class);

Use App\Http\Controllers\CarStateController;
Route::resource('car_states', CarStateController::class);

Use App\Http\Controllers\CarController;
Route::resource('cars', CarController::class);

Use App\Http\Controllers\TestDriveController;
Route::resource('test_drives', TestDriveController::class);

Use App\Http\Controllers\OrderController;
Route::resource('orders', OrderController::class);

Use App\Http\Controllers\PaymentMethodController;
Route::resource('payment_methods', PaymentMethodController::class);

Use App\Http\Controllers\PaymentController;
Route::resource('payments', PaymentController::class);