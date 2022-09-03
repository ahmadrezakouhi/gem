<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\SenderReceiverController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\DraftController;
use App\Http\Controllers\Api\FieldController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('companies',CompanyController::class);

Route::apiResource('drivers',DriverController::class);

Route::apiResource('senders-receivers',SenderReceiverController::class,
['parameters' => [
    'senders-receivers' => 'sender_receiver'
]]);

Route::apiResource('addresses',AddressController::class);

Route::apiResource('vehicles',VehicleController::class);

Route::apiResource('drafts',DraftController::class);

Route::apiResource('fields',FieldController::class);

