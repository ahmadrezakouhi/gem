<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Resources\DriverResource;
use Symfony\Component\HttpFoundation\Response;

class DriverController extends Controller
{

    /**
     * @OA\Get(
     *   path="/api/drivers",
     *   tags={"drivers"},
     *   summary="get all drivers",
     *       description="get all drivers",
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
        return  Driver::paginate();
    }

    /**
     * @OA\Post(
     *   path="/api/drivers",
     *   tags={"drivers"},
     *   summary="create driver",
     *       description="create driver",
     *   @OA\Parameter(
     *      name="name",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *     @OA\Parameter(
     *      name="last_name",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *  *   @OA\Parameter(
     *      name="father_name",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     * *  *   @OA\Parameter(
     *      name="national_code",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     * *  *   @OA\Parameter(
     *      name="birth_certificate_code",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="driver_licence_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="driver_licence_expire",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="date"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="health_card_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     * *  *   @OA\Parameter(
     *      name="health_card_expire",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="date"
     * ),
     *
     *
     * ),
     *
     *
     * *  *   @OA\Parameter(
     *      name="insurance_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="smart_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="smart_number_expire",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="date"
     * ),
     *
     *
     * ),
     *
     *
     *  * *  *   @OA\Parameter(
     *      name="vehicle_smart_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *  * *  *   @OA\Parameter(
     *      name="city_of_birth",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *  * *  *   @OA\Parameter(
     *      name="city_of_driver_licence",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *  * *  *   @OA\Parameter(
     *      name="allowed_vehicle_type",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="tiny integer"
     * ),
     *
     *
     * ),
     *
     *
     *
     *    @OA\Parameter(
     *      name="status",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="tiny integer"
     * ),
     *
     *
     * ),
     *
     *  *    @OA\Parameter(
     *      name="organization_phone",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *  *    @OA\Parameter(
     *      name="phones",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *  *    @OA\Parameter(
     *      name="postal_code",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *  *    @OA\Parameter(
     *      name="start_of_activity",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="date"
     * ),
     *
     *
     * ),
     *
     * *  *    @OA\Parameter(
     *      name="country",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     * *  *    @OA\Parameter(
     *      name="country_code",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="big integer"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *    @OA\Parameter(
     *      name="education",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *
     * *  *    @OA\Parameter(
     *      name="IBAN",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *
     * *  *    @OA\Parameter(
     *      name="province",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *
     * * *  *    @OA\Parameter(
     *      name="city",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * * *  *    @OA\Parameter(
     *      name="address",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *
     *   @OA\Response(
     *      response=201,
     *       description="success (created)",
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
       $driver = Driver::create($request->all());
       return response()->json($driver,Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *   path="/api/drivers/{driver}",
     *   tags={"drivers"},
     *   summary="get driver by id",
     *       description="get driver by id",
     *   @OA\Parameter(
     *      name="driver",
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
    public function show(Driver $driver)
    {
        return response()->json($driver, Response::HTTP_ACCEPTED);
    }

     /**
     * @OA\Patch(
     *   path="/api/drivers/{driver}",
     *   tags={"drivers"},
     *   summary="update driver",
     *       description="update driver",
     *
     **   @OA\Parameter(
     *      name="driver",
     *      in="path",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="integer"
     * ),
     *),
     *
     *
     *
     *
     * @OA\Parameter(
     *      name="name",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *     @OA\Parameter(
     *      name="last_name",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *  *   @OA\Parameter(
     *      name="father_name",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     * *  *   @OA\Parameter(
     *      name="national_code",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     * *  *   @OA\Parameter(
     *      name="birth_certificate_code",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="driver_licence_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="driver_licence_expire",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="date"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="health_card_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     * *  *   @OA\Parameter(
     *      name="health_card_expire",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="date"
     * ),
     *
     *
     * ),
     *
     *
     * *  *   @OA\Parameter(
     *      name="insurance_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="smart_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *   @OA\Parameter(
     *      name="smart_number_expire",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="date"
     * ),
     *
     *
     * ),
     *
     *
     *  * *  *   @OA\Parameter(
     *      name="vehicle_smart_number",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *  * *  *   @OA\Parameter(
     *      name="city_of_birth",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *  * *  *   @OA\Parameter(
     *      name="city_of_driver_licence",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *  * *  *   @OA\Parameter(
     *      name="allowed_vehicle_type",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="tiny integer"
     * ),
     *
     *
     * ),
     *
     *
     *
     *    @OA\Parameter(
     *      name="status",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="tiny integer"
     * ),
     *
     *
     * ),
     *
     *  *    @OA\Parameter(
     *      name="organization_phone",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *  *    @OA\Parameter(
     *      name="phones",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *  *    @OA\Parameter(
     *      name="postal_code",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *  *    @OA\Parameter(
     *      name="start_of_activity",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="date"
     * ),
     *
     *
     * ),
     *
     * *  *    @OA\Parameter(
     *      name="country",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     * *  *    @OA\Parameter(
     *      name="country_code",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="big integer"
     * ),
     *
     *
     * ),
     *
     *
     *
     * *  *    @OA\Parameter(
     *      name="education",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *
     * *  *    @OA\Parameter(
     *      name="IBAN",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *
     * *  *    @OA\Parameter(
     *      name="province",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *
     * * *  *    @OA\Parameter(
     *      name="city",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     * * *  *    @OA\Parameter(
     *      name="address",
     *      in="query",
     *      required=false,
     *      @OA\Schema(
     *
     *          type="string"
     * ),
     *
     *
     * ),
     *
     *
     *
     *
     *   @OA\Response(
     *      response=202,
     *       description="Success accept",
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
    public function update(Request $request, Driver $driver)
    {
        $driver->update($request->all());
        return response()->json($driver,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/drivers/{driver}",
     *   tags={"drivers"},
     *   summary="delete driver by id",
     *       description="delete driver by id",
     *   @OA\Parameter(
     *      name="driver",
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
    public function destroy(Driver $driver)
    {
        $driver->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
