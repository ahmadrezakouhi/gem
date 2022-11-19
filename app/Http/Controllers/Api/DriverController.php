<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Resources\DriverResource;
use App\Library\Http\HttpClient;
use App\Library\Http\HttpClientFactory;
use Symfony\Component\HttpFoundation\Response;
class DriverController extends Controller
{
    private $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

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
        return  Driver::orderBy('id','desc')->paginate();
    }

   /**
     * @OA\Post(
     *   path="/api/drivers",
     *   tags={"drivers"},
     *   summary="create driver",
     *       description="create driver",
     *
     *
     *
     *
     * *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="panel_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="perosnal_code",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="last_name",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="father_name",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="birth_certificate_code",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="driver_licence_number",
     *           type="string",
     *         ),
     * *          @OA\Property(
     *           property="driver_licence_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="driver_licence_type",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="health_card_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="health_card_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="insurance_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="smart_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="smart_number_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="vehicle_smart_number",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="birth_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="city_of_birhth",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="city_of_driver_licence",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="allowed_vehicle_type",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="status",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="active",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="country_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="country",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="organization_phone",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="phones",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="start_activity",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="address",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="province",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="education",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="IBAN",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="last_inquiry_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *       ),
     *     ),
     *   ),
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
    public function store(Request $request)
    {
       $driver = Driver::create($request->all()+['panel_code'=>'123456789']);
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
     *@OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="panel_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="perosnal_code",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="last_name",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="father_name",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="birth_certificate_code",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="driver_licence_number",
     *           type="string",
     *         ),
     * *          @OA\Property(
     *           property="driver_licence_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="driver_licence_type",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="health_card_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="health_card_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="insurance_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="smart_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="smart_number_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="vehicle_smart_number",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="birth_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="city_of_birhth",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="city_of_driver_licence",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="allowed_vehicle_type",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="status",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="active",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="country_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="country",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="organization_phone",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="phones",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="start_activity",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="address",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="province",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="education",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="IBAN",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="last_inquiry_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *       ),
     *     ),
     *   ),
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
        $driver_panel_code = $driver->panel_code;
        $inputs = $request->all();
        $inputs['panel_code']=$driver_panel_code;
        $driver->update($inputs);
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

 /**
     * @OA\Post(
     *   path="/api/drivers/load-driver-by-national-code",
     *   tags={"drivers"},
     *   summary="loading driver by national code",
     *       description="loading driver by national code",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="national_code",
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
    public function loadDriverByNationalCode(Request $request ){


        $response = $this->http->post('LoadDriverByNationalCode?NationalCode='.$request->national_code);
        return response([
            'name' => $response->Name,
            'last_name' => $response->Family,
            'father_name' => $response->FatherName,

            'city_of_birth_code' => $response->BirthCityCode,
            'city_of_birth'=> $response->BirthCityName,
            'smart_number' => $response->CardNumber ,
            'smart_number_expire' => $response->CardValidationDate->Year
            .'-'.
            $response->CardValidationDate->Month
            .'-'.
            $response->CardValidationDate->Day
            ,


            'driver_licence_number' => $response->CertifcateIssueCityCode,
            'driver_licence_city' => $response->CertifcateIssueCityName,
            'driver_licence_number' => $response->CertifcateNumber,
            'driver_licence_type' => $response->Driver_Type,

            'birth_certificate_code' => $response->IdentifierNumber,
            'insurance_branch' => $response->InsuranceBranch,
            'insurance_number' => $response->InsuranceId,
            'is_active' => $response->IsActive,
            'phones' => $response->Mobile,
            'driver_licence_type_title' => $response->NOVE_GAVAHINAMEH,

            'national_code'=>$response->NationalId,
            'health_card_expire' => $response->TARIKH_ETEBAR_KART_SALAMAT

         ]);

        // return $response;

    }

}
