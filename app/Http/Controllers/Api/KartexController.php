<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KartexResource;
use App\Models\Kartex;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KartexController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/kartexes",
     *   tags={"kartexes"},
     *   summary="get all kartexes",
     *       description="get all kartexes",
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
        return KartexResource::collection(Kartex::paginate());
    }

      /**
     * @OA\Post(
     *   path="/api/kartexes",
     *   tags={"kartexes"},
     *   summary="create kartex",
     *       description="create kartex",
     *
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="panel_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="kartex_number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="kartex_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="order_number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="order_item",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="explanation",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="package_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="package_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="weight",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="quantity",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="value",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="owner",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="loading_location",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="traffic_status",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="fire_status",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="plan_status",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="remainder_order",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="sender_code",
     *           type="integer",
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
     *           property="sender_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_storage_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="sender_postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_code",
     *           type="integer",
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
     *           property="receiver_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_storage_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="receiver_postal_code",
     *           type="string",
     *         ),
     *         @OA\Property(
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
        $kartex = Kartex::create($request->all());
        return response()->json(new KartexResource($kartex),Response::HTTP_CREATED);
    }

     /**
     * @OA\Get(
     *   path="/api/kartexes/{kartex}",
     *   tags={"kartexes"},
     *   summary="get kartex by id",
     *       description="get kartex by id",
     *   @OA\Parameter(
     *      name="kartex",
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
    public function show(Kartex $kartex)
    {
        return response()->json(new KartexResource($kartex),Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/kartexes/{kartex}",
     *   tags={"kartexes"},
     *   summary="update kartex",
     *       description="update kartex",
     *     @OA\Parameter(
     *          name="kartex",
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
     *           property="panel_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="kartex_number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="kartex_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="order_number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="order_item",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="explanation",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="package_code",
     *           type="integer",
     *         ),
     * *          @OA\Property(
     *           property="package_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="weight",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="quantity",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="value",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="owner",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="loading_location",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="traffic_status",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="fire_status",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="plan_status",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="remainder_order",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="sender_code",
     *           type="integer",
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
     *           property="sender_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_storage_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="sender_postal_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="receiver_code",
     *           type="integer",
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
     *           property="receiver_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_storage_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="receiver_postal_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *
     *      ),
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
    public function update(Request $request, Kartex $kartex)
    {
        $kartex->update($request->all());
        return response()->json(new KartexResource($kartex),Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/kartexes/{kartex}",
     *   tags={"kartexes"},
     *   summary="delete kartex by id",
     *       description="delete kartex by id",
     *   @OA\Parameter(
     *      name="kartex",
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
    public function destroy(Kartex $kartex)
    {
        $kartex->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
