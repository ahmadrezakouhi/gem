<?php
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AddressController;
use App\Http\Controllers\Api\BillOfLadingController;
use App\Http\Controllers\Api\BillPayController;
use App\Http\Controllers\Api\BillItemController;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\KartexController;
use App\Http\Controllers\Api\DraftBillOfLadingController;
use App\Http\Controllers\Api\SenderReceiverController;
use App\Http\Controllers\Api\VehicleController;
use App\Http\Controllers\Api\DraftController;
use App\Http\Controllers\Api\FieldController;
use App\Http\Controllers\Api\InsuranceCompanyController;
use App\Http\Controllers\Api\InsuranceController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OwnerController;
use App\Http\Controllers\Api\ShortcutController;
use App\Http\Controllers\Api\TariffController;
use App\Http\Controllers\Api\TransportCotractController;
use App\Http\Controllers\Api\UserController;
use App\Models\BillOfLading;
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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

});





Route::apiResource('companies', CompanyController::class);

Route::apiResource('drivers', DriverController::class);

Route::prefix('drivers')->group(function () {

    Route::post(
        'load-driver-by-national-code',
        [DriverController::class, 'loadDriverByNationalCode']
    );
});

Route::apiResource(
    'senders-receivers',
    SenderReceiverController::class,
    ['parameters' => [
        'senders-receivers' => 'sender_receiver'
    ]]
);

Route::prefix('senders-receivers')->group(function () {

    Route::post(
        'load-name-by-national-code',
        [SenderReceiverController::class, 'loadNameByNationalCode']
    );
});

Route::apiResource('addresses', AddressController::class);

Route::prefix('addresses')->group(function () {

    Route::post(
        'load-address-by-postal-code',
        [AddressController::class, 'loadAddressByPostalCode']
    );
});

Route::apiResource('vehicles', VehicleController::class);


Route::prefix('vehicles')->group(function () {

    Route::post('load-navi-by-smart-card-no', [
        VehicleController::class, 'loadNaviBySmartCardNo'
    ]);

    Route::post('load-navi-by-smart-card-no-full', [
        VehicleController::class, 'loadNaviBySmartCardNoFull'
    ]);
});

Route::apiResource('drafts', DraftController::class);

Route::apiResource('fields', FieldController::class);

Route::apiResource('bill-of-ladings', BillOfLadingController::class);

Route::prefix('bill-of-ladings')->group(function () {

    Route::post(
        'get-bill-of-lading-by-driver-national-id-in-today',
        [BillOfLadingController::class, 'getBillOfLadingByDriverNationalIdInToday']
    );

    Route::post(
        'get-bill-of-lading-by-driver-national-id',
        [BillOfLadingController::class, 'getBillOfLadingByDriverNationalId']
    );

    Route::post(
        'get-bills-by-freighter-plaque',
        [BillOfLadingController::class, 'getBillsByFreighterPlaque']
    );

    Route::post(
        'get-bills-by-freighter-card-number-in-today',
        [BillOfLadingController::class, 'getBillsByFreighterCardNumberInToday']
    );



    Route::post(
        'revocation-bill-of-lading-by-number-and-serial',
        [BillOfLadingController::class, 'revocationBillOfLadingByNumberAndSerial']
    );

    Route::post(
        'register-hub',
        [BillOfLadingController::class, 'registerHub']
    );

    Route::post(
        'load-bill-of-lading-by-number-and-serial',
        [BillOfLadingController::class, 'loadBillOfLadingByNumberAndSerial']
    );
    Route::post(
        'revoke-hub',
        [BillOfLadingController::class, 'revokeHub']
    );
});


Route::get('insurances/active', [InsuranceController::class, 'getInsurancesActive'])->name('insurnases.active');

// Route::prefix('insurances')->group(function(){
Route::apiResource('insurances', InsuranceController::class);
// });

Route::apiResource('tariffs', TariffController::class); //->except('index');

// Route::get('insurances/{insurance}/tariffs',[TariffController::class,'index']);

Route::get('insurance-companies', [InsuranceCompanyController::class, 'index']);

Route::apiResource('bill-items', BillitemController::class);

Route::apiResource(
    'drafts-bill-of-ladings',
    DraftBillOfLadingController::class,
    ['parameters' => [
        'drafts-bill-of-ladings' => 'draft_bill_of_lading'
    ]]
);

Route::apiResource('transport-contracts', TransportCotractController::class);

Route::apiResource('users', UserController::class);

Route::apiResource('orders', OrderController::class);

Route::apiResource('kartexes', KartexController::class);

Route::apiResource('owners', OwnerController::class);

Route::apiResource('shortcuts', ShortcutController::class);

Route::apiResource('bill-pays', BillPayController::class);
