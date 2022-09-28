<?php

use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\BillOfLadingController;
use App\Http\Controllers\Api\CargoController;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\DraftBillOfLadingController;
use App\Http\Controllers\Api\SenderReceiverController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\DraftController;
use App\Http\Controllers\Api\FieldController;
use App\Http\Controllers\Api\InsuranceCompanyController;
use App\Http\Controllers\Api\InsuranceController;
use App\Http\Controllers\Api\TariffController;
use App\Http\Controllers\Api\TransportCotractController;
use App\Http\Controllers\Api\UserController;
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

Route::apiResource('bill-of-ladings',BillOfLadingController::class);


Route::get('insurances/active',[InsuranceController::class ,'getInsurancesActive'])->name('insurnases.active');

// Route::prefix('insurances')->group(function(){
    Route::apiResource('insurances',InsuranceController::class);
// });

Route::apiResource('tariffs',TariffController::class);//->except('index');

// Route::get('insurances/{insurance}/tariffs',[TariffController::class,'index']);

Route::get('insurance-companies',[InsuranceCompanyController::class,'index']);

Route::apiResource('cargoes',CargoController::class);

Route::apiResource('drafts-bill-of-ladings',DraftBillOfLadingController::class,
['parameters' => [
    'drafts-bill-of-ladings' => 'draft_bill_of_lading'
]]);

Route::apiResource('transport-contracts',TransportCotractController::class);

Route::apiResource('users',UserController::class);
