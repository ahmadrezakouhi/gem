<?php

namespace App\Http\Controllers;

use App\Models\Draft;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DraftController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/drafts",
     *   tags={"drafts"},
     *   summary="get all drafts",
     *       description="get all drafts",
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
        return Draft::paginate();
    }

    /**
     * @OA\Post(
     *   path="/api/drafts",
     *   tags={"drafts"},
     *   summary="create draft",
     *       description="create draft",
     *
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *         @OA\Property(
     *           property="draft_number",
     *
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="bill_of_lading_number",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="cargo_declaration_number",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="cargo_declaration_date",
     *           type="date",
     *         ),
     *
     *           @OA\Property(
     *           property="licence_number",
     *           type="integer",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="cargo_code",
     *           type="integer",
     *         ),
     *
     * *           @OA\Property(
     *           property="cargo_title",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="packing_code",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="packing_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="weight",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="quantity",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="value",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="owner",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="location_loading",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="traffic",
     *           type="tiny integer",
     *         ),
     *          @OA\Property(
     *           property="incendiary",
     *           type="tiny integer",
     *         ),
     *          @OA\Property(
     *           property="traffic_zone",
     *           type="tiny integer",
     *         ),
     *
     *          @OA\Property(
     *           property="remained_order",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="remained_cortex",
     *           type="integer",
     *         ),
     *         @OA\Property(
     *           property="freight_charges",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="hub_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="status_code",
     *           type="tiny integer",
     *         ),
     *          @OA\Property(
     *           property="status_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="is_local_cancel",
     *           type="tiny integer",
     *         ),
     *
     *         @OA\Property(
     *           property="start_validity",
     *           type="date",
     *         ),
     *         @OA\Property(
     *           property="end_validity",
     *           type="date",
     *         ),
     *         @OA\Property(
     *           property="order_number",
     *           type="integer",
     *         ),
     *         @OA\Property(
     *           property="is_logistics",
     *           type="tiny integer",
     *         ),
     *         @OA\Property(
     *           property="receipt",
     *           type="tiny integer",
     *         ),
     *         @OA\Property(
     *           property="warehouse_code",
     *           type="integer",
     *         ),
     *         @OA\Property(
     *           property="warehouse_type_code",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="warehouse_type_title",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="document_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="document_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="loading_number_plate",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="loading_number_plate_zone",
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
     *           property="sender_fullname",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_city",
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
     *           property="receiver_fullname",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_city",
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
     *           property="first_driver_fullname",
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
     *
     *           @OA\Property(
     *           property="second_driver_fullname",
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
     *           property="field_1",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_2",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_3",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="field_4",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_5",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_6",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="field_7",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_8",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_9",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="field_10",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_11",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="field_12",
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
        $draft = Draft::create($request->all());
        return response()->json($draft,Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *   path="/api/drafts/{draft}",
     *   tags={"drafts"},
     *   summary="get draft by id",
     *       description="get draft by id",
     *   @OA\Parameter(
     *      name="draft",
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
    public function show(Draft $draft)
    {
        return response()->json($draft,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/drafts/{draft}",
     *   tags={"drafts"},
     *   summary="update draft",
     *       description="update draft",
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
     *         @OA\Property(
     *           property="draft_number",
     *
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="bill_of_lading_number",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="cargo_declaration_number",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="cargo_declaration_date",
     *           type="date",
     *         ),
     *
     *           @OA\Property(
     *           property="licence_number",
     *           type="integer",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="cargo_code",
     *           type="integer",
     *         ),
     *
     * *           @OA\Property(
     *           property="cargo_title",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="packing_code",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="packing_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="weight",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="quantity",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="value",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="owner",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="location_loading",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="traffic",
     *           type="tiny integer",
     *         ),
     *          @OA\Property(
     *           property="incendiary",
     *           type="tiny integer",
     *         ),
     *          @OA\Property(
     *           property="traffic_zone",
     *           type="tiny integer",
     *         ),
     *
     *          @OA\Property(
     *           property="remained_order",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="remained_cortex",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="freight_charges",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="hub_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="status_code",
     *           type="tiny integer",
     *         ),
     *          @OA\Property(
     *           property="status_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="is_local_cancel",
     *           type="tiny integer",
     *         ),
     *  *         @OA\Property(
     *           property="start_validity",
     *           type="date",
     *         ),
     *         @OA\Property(
     *           property="end_validity",
     *           type="date",
     *         ),
     *         @OA\Property(
     *           property="order_number",
     *           type="integer",
     *         ),
     *         @OA\Property(
     *           property="is_logistics",
     *           type="tiny integer",
     *         ),
     *         @OA\Property(
     *           property="receipt",
     *           type="tiny integer",
     *         ),
     *         @OA\Property(
     *           property="warehouse_code",
     *           type="integer",
     *         ),
     *         @OA\Property(
     *           property="warehouse_type_code",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="warehouse_type_title",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="document_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="document_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="loading_number_plate",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="loading_number_plate_zone",
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
     *           property="sender_fullname",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_city",
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
     *           property="receiver_fullname",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_city",
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
     *           property="first_driver_fullname",
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
     *
     *           @OA\Property(
     *           property="second_driver_fullname",
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
     *           property="field_1",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_2",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_3",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="field_4",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_5",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_6",
     *           type="string",
     *         ),
     *         @OA\Property(
     *           property="field_7",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_8",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_9",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="field_10",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="field_11",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="field_12",
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
    public function update(Request $request, Draft $draft)
    {
        $draft->update($request->all());
        return response()->json($draft,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/drafts/{draft}",
     *   tags={"drafts"},
     *   summary="delete draft by id",
     *       description="delete draft by id",
     *   @OA\Parameter(
     *      name="draft",
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
    public function destroy(Draft $draft)
    {
        $draft->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
