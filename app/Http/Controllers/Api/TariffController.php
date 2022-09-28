<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use App\Models\Tariff;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TariffController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/tariffs",
     *   tags={"tariffs"},
     *   summary="get all tariffs",
     *       description="get all insurnces",
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
    public function index(/*Insurance $insurance*/)
    {
        // return $insurance->tariffs()->orderBy('id','desc')->get();
        return Tariff::orderBy('id','desc')->get();
    }

     /**
     * @OA\Post(
     *   path="/api/tariffs/{tariff}",
     *   tags={"tariffs"},
     *   summary="update tariff",
     *       description="update tariff",
     *
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="insurance_id",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="min_value",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="max_value",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="cargo_group_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="cargo_group_title",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="variable_value",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="value_bigger_than",
     *           type="integer",
     *
     *         ),
     *           @OA\Property(
     *           property="constant_value",
     *           type="integer",
     *
     *         ),
     * *          @OA\Property(
     *           property="description",
     *           type="string",
     *
     *         ),
     *
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
        $tariff = Tariff::create($request->all());
        return response()->json($tariff,Response::HTTP_CREATED);
    }

      /**
     * @OA\Get(
     *   path="/api/tariffs/{tariff}",
     *   tags={"tariffs"},
     *   summary="get tariff by id",
     *       description="get tariff by id",
     *   @OA\Parameter(
     *      name="tariff",
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
    public function show(Tariff $tariff)
    {
        return response()->json($tariff,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/tariffs/{tariff}",
     *   tags={"tariffs"},
     *   summary="update tariff",
     *       description="update tariff",
     *     @OA\Parameter(
     *          name="tariff",
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
     *           property="insurance_id",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="min_value",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="max_value",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="cargo_group_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="cargo_group_title",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="variable_value",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="value_bigger_than",
     *           type="integer",
     *
     *         ),
     *           @OA\Property(
     *           property="constant_value",
     *           type="integer",
     *
     *         ),
     * *          @OA\Property(
     *           property="description",
     *           type="string",
     *
     *         ),
     *
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
    public function update(Request $request, Tariff $tariff)
    {
        $tariff->update($request->all());
        return response()->json($tariff,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/tariffs/{tariff}",
     *   tags={"tariffs"},
     *   summary="delete tariff by id",
     *       description="delete tariff by id",
     *   @OA\Parameter(
     *      name="tariff",
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
    public function destroy(Tariff $tariff)
    {
        $tariff->delete();
        return response()->json(null , Response::HTTP_NO_CONTENT);
    }
}
