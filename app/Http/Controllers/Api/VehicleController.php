<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Library\Http\HttpClient;
use App\Library\Http\HttpClientFactory;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VehicleController extends Controller
{

    private $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }
    /**
     * @OA\Get(
     *   path="/api/vehicles",
     *   tags={"vehicles"},
     *   summary="get all vehicles",
     *       description="get all vehicles",
     *   @OA\Response(
     *      response=200,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function index()
    {
        return Vehicle::orderBy('id', 'desc')->paginate();
    }

    /**
     * @OA\Post(
     *   path="/api/vehicles",
     *   tags={"vehicles"},
     *   summary="create vehicle",
     *       description="create vehicle",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *         @OA\Property(
     *           property="number_plate",
     *
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="number_plate_zone",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="number_plate_type",
     *           type="integer",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="numbering_location_code",
     *           type="integer",
     *         ),
     *
     * *           @OA\Property(
     *           property="numbering_location",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="VIN",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="allowed_driver_licence",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="vehicle_type",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="owner_mobile",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="production",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="loading_type",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="type",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="status",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="inspection_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="inspection_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="insurance_number",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="insurance_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="color",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="brand_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="brand_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="number_of_allowed_draft",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="day_of_allowed_draft",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="number_of_allowed_bill_of_lading",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="day_of_allowed_bill_of_lading",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="number_of_unconfirmed_draft",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="number_of_unconfirmed_bill_of_lading",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="capacity",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="weight",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="loading_length",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="loading_width",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="has_roll",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="chassis_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="document_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="violation",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="engine_number",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="document_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="owner_status",
     *           type="integer",
     *         ),
     *       ),
     *     ),
     *   ),
     *
     *
     *
     *
     *
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function store(Request $request)
    {
        $vehicle = Vehicle::create($request->all());
        return response($vehicle, Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Get(
     *   path="/api/vehicles/{vehicle}",
     *   tags={"vehicles"},
     *   summary="get vehicle by id",
     *       description="get vehicle by id",
     *   @OA\Parameter(
     *      name="vehicle",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *
     *          type="integer"
     * )
     *
     *
     * ),
     *   @OA\Response(
     *      response=202,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function show(Vehicle $vehicle)
    {
        return response($vehicle, Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/vehicles/{vehicle}",
     *   tags={"vehicles"},
     *   summary="update vehicle",
     *       description="update vehicle",
     *     @OA\Parameter(
     *          name="vehicle",
     *          in="path",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *
     * )
     *
     * ),
     *
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *         @OA\Property(
     *           property="number_plate",
     *
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="number_plate_zone",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="number_plate_type",
     *           type="integer",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="numbering_location_code",
     *           type="integer",
     *         ),
     *
     * *           @OA\Property(
     *           property="numbering_location",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="VIN",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="allowed_driver_licence",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="vehicle_type",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="owner_mobile",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="production",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="loading_type",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="type",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="status",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="inspection_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="inspection_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="insurance_number",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="insurance_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="color",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="brand_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="brand_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="number_of_allowed_draft",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="day_of_allowed_draft",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="number_of_allowed_bill_of_lading",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="day_of_allowed_bill_of_lading",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="number_of_unconfirmed_draft",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="number_of_unconfirmed_bill_of_lading",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="capacity",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="weight",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="loading_length",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="loading_width",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="has_roll",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="chassis_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="document_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="violation",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="engine_number",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="document_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="owner_status",
     *           type="integer",
     *         ),
     *       ),
     *     ),
     *   ),
     *
     *
     *
     *
     *
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());
        return response($vehicle, Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/vehicles/{vehicle}",
     *   tags={"vehicles"},
     *   summary="delete vehicle by id",
     *       description="delete vehicles by id",
     *   @OA\Parameter(
     *      name="vehicle",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *
     *          type="integer"
     * )
     *
     *
     * ),
     *   @OA\Response(
     *      response=204,
     *       description="Success (without content)",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }


    /**
     * @OA\Post(
     *   path="/api/vehicles/load-navi-by-smart-card-no",
     *   tags={"vehicles"},
     *   summary="loading vehicle by smart card number ",
     *       description="loading vehicle by smart card number ",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="card_number",
     *           type="string",
     *         ),
     *       ),
     *     ),
     *   ),
     *
     *
     *
     *
     *
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/

    public function loadNaviBySmartCardNo(Request $request)
    {

        $response = $this->http->post('LoadNaviBySmartCardNo?CardNumber='
            . $request->card_number);

        return $response;
    }

    /**
     * @OA\Post(
     *   path="/api/vehicles/load-navi-by-smart-card-no-full",
     *   tags={"vehicles"},
     *   summary="loading vehicle by smart card number full",
     *       description="loading vehicle by smart card number full",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="card_number",
     *           type="string",
     *         ),
     *       ),
     *     ),
     *   ),
     *
     *
     *
     *
     *
     *   @OA\Response(
     *      response=201,
     *       description="Success",
     *      @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *   ),
     *   @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *)
     **/


    public function loadNaviBySmartCardNoFull(Request $request)
    {

        $response = $this->http->post('LoadNaviBySmartCardNoFull?CardNumber='
            . $request->card_number);
        return $response;
    }
}
