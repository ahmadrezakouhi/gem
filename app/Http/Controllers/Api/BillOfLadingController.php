<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BillOfLading;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BillOfLadingController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/bill-of-ladings",
     *   tags={"bill-of-ladings"},
     *   summary="get all bill of ladings",
     *       description="get all bill of ladings",
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
        return BillOfLading::with('cargoes')->orderBy('id', 'desc')->paginate();
    }

    /**
     * @OA\Post(
     *   path="/api/bill-of-ladings",
     *   tags={"bill-of-ladings"},
     *   summary="create bill of lading",
     *       description="create bill of lading",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="bill_of_lading_serial",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="bill_of_lading_number",
     *           type="integer",
     *         ),
     *         @OA\Property(
     *           property="draft_number",
     *
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="draft_serial",
     *
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="overburden",
     *           type="tiny integer",
     *           default="0",
     *         ),
     *          @OA\Property(
     *           property="estimate_receive_date",
     *           type="date",
     *         ),
     *
     *          @OA\Property(
     *           property="warehouse_code",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="warehouse_type_code",
     *           type="integer",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="warehouse_type_title",
     *           type="string",
     *         ),
     *
     * *           @OA\Property(
     *           property="warehouse_fee",
     *           type="integer",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="loading_code",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="loading_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="document_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="document_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="cottage_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="cottage_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="cortex_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="order_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="item",
     *           type="string",
     *         ),
     *  *          @OA\Property(
     *           property="status_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="status_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="scale_fee",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="sleep_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="insurance_tax",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="insurance_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="overload_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="commission",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="advance_freight",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="add_valorem_tax",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="unload_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="terminal_fee",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="cost",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="driver_insurance_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="freight_collect",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="freight_insurance",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="fixed_cost",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="register_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="receipt",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="sender_id",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_economic_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_last_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_province_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_province_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_city_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_city_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_phones",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_address",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_id",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_economic_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_last_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_province_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_province_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_city_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_city_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_phones",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_address",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="first_driver_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_last_name",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="first_driver_personal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_smart_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_health_card_expire",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_phones",
     *           type="string",
     *         ),
     * *          @OA\Property(
     *           property="first_driver_address",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="second_driver_name",
     *           type="string",
     *         ),
     *        @OA\Property(
     *           property="second_driver_last_name",
     *           type="string",
     *         ),
     *        @OA\Property(
     *           property="second_driver_personal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="second_driver_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="second_driver_smart_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="second_driver_health_card_expire",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="second_driver_phones",
     *           type="string",
     *         ),
     * *          @OA\Property(
     *           property="second_driver_address",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_smart_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_number_plate",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_number_plate_zone",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_insurance_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="vehicle_inspection_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="vehilce_brand_title",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="vehicle_loading_type",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_status",
     *           type="tiny integer",
     *         ),
     *          @OA\Property(
     *           property="sc_field_1",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_2",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_3",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="sc_field_4",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_5",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_6",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="sc_field_7",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_8",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_9",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="sc_field_10",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_11",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="sc_field_12",
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
    public function store(Request $request)
    {
        $bill_of_lading = BillOfLading::create($request->all());
        return response()->json($bill_of_lading, Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *   path="/api/bill-of-ladings/{bill-of-lading}",
     *   tags={"bill-of-ladings"},
     *   summary="get bill of ladings by id",
     *       description="get bill of ladings by id",
     *   @OA\Parameter(
     *      name="bill-of-ladings",
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
    public function show(BillOfLading $bill_of_lading)
    {
        return response()->json($bill_of_lading->load('cargoes'), Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/bill-of-ladings/{bill-of-lading}",
     *   tags={"bill-of-ladings"},
     *   summary="update bill of lading",
     *       description="update bill of lading",
     *     @OA\Parameter(
     *          name="draft",
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
     *          @OA\Property(
     *           property="bill_of_lading_serial",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="bill_of_lading_number",
     *           type="integer",
     *         ),
     *         @OA\Property(
     *           property="draft_number",
     *
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="draft_serial",
     *
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="overburden",
     *           type="tiny integer",
     *           default="0",
     *         ),
     *          @OA\Property(
     *           property="estimate_receive_date",
     *           type="date",
     *         ),
     *
     *          @OA\Property(
     *           property="warehouse_code",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="warehouse_type_code",
     *           type="integer",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="warehouse_type_title",
     *           type="string",
     *         ),
     *
     * *           @OA\Property(
     *           property="warehouse_fee",
     *           type="integer",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="loading_code",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="loading_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="document_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="document_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="cottage_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="cottage_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="cortex_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="order_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="item",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="status_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="status_title",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="sleep_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="insurance_tax",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="insurance_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="overload_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="commission",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="advance_freight",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="add_valorem_tax",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="unload_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="terminal_fee",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="cost",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="driver_insurance_fee",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="freight_collect",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="freight_insurance",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="fixed_cost",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="register_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="receipt",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="sender_id",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_economic_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_last_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_province_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_province_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_city_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_city_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_phones",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_address",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_id",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_economic_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_last_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_province_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_province_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_city_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_city_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_phones",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_address",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="first_driver_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_last_name",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="first_driver_personal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_smart_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_health_card_expire",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="first_driver_phones",
     *           type="string",
     *         ),
     * *          @OA\Property(
     *           property="first_driver_address",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="second_driver_name",
     *           type="string",
     *         ),
     *        @OA\Property(
     *           property="second_driver_last_name",
     *           type="string",
     *         ),
     *        @OA\Property(
     *           property="second_driver_personal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="second_driver_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="second_driver_smart_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="second_driver_health_card_expire",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="second_driver_phones",
     *           type="string",
     *         ),
     * *          @OA\Property(
     *           property="second_driver_address",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_smart_number",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_number_plate",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_number_plate_zone",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_insurance_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="vehicle_inspection_expire",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="vehilce_brand_title",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="vehicle_loading_type",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="vehicle_status",
     *           type="tiny integer",
     *         ),
     *          @OA\Property(
     *           property="sc_field_1",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_2",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_3",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="sc_field_4",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_5",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_6",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="sc_field_7",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_8",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_9",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="sc_field_10",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sc_field_11",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="sc_field_12",
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
    public function update(Request $request, BillOfLading $bill_of_lading)
    {

        $bill_of_lading->cargoes()->delete();
        foreach ($request->cargoes as $cargoe) {
            $bill_of_lading->cargoes()->create($cargoe);
        }
        $bill_of_lading->update($request->all());
        return response()->json($bill_of_lading, Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/bill-of-ladings/{bill-of-lading}",
     *   tags={"bill-of-ladings"},
     *   summary="delete bill of lading by id",
     *       description="delete bill of lading by id",
     *   @OA\Parameter(
     *      name="bill_of_ladings",
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
    public function destroy(BillOfLading $bill_of_lading)
    {
        $bill_of_lading->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
