<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cargo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CargoController extends Controller
{
     /**
     * @OA\Get(
     *   path="/api/cargoes",
     *   tags={"cargoes"},
     *   summary="get all cargoes",
     *       description="get all cargoes",
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
        return Cargo::orderBy('id','desc')->get();
    }

    /**
     * @OA\Post(
     *   path="/api/cargoes",
     *   tags={"cargoes"},
     *   summary="create cargo",
     *       description="create cargo",
     *
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="bill_of_lading_id",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="cargo_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="cargo_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="packing_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="packing_title",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
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
     *           type="integer",
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
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="incendiary",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="traffic_zone",
     *           type="boolean",
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
        $cargo = Cargo::create($request->all());
        return response()->json($cargo,Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *   path="/api/cargoes/{cargo}",
     *   tags={"cargoes"},
     *   summary="get cargo by id",
     *       description="get cargo by id",
     *   @OA\Parameter(
     *      name="cargo",
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
    public function show(Cargo $cargo)
    {
        return response()->json($cargo,Response::HTTP_ACCEPTED);
    }

     /**
     * @OA\Patch(
     *   path="/api/cargoes/{cargo}",
     *   tags={"cargoes"},
     *   summary="update cargo",
     *       description="update cargo",
     *   *     @OA\Parameter(
     *          name="cargo",
     *          in="path",
     *          required=true,
     *          @OA\Schema(
     *              type="integer"
     *
     * )
     *
     * ),
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="bill_of_lading_id",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="cargo_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="cargo_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="package_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="package_title",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
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
     *           type="integer",
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
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="incendiary",
     *           type="boolean",
     *         ),
     *          @OA\Property(
     *           property="traffic_zone",
     *           type="boolean",
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
    public function update(Request $request, Cargo $cargo)
    {
        $cargo->update($request->all());
        return response()->json($cargo,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/cargoes/{cargo}",
     *   tags={"cargoes"},
     *   summary="delete cargo by id",
     *       description="delete cargo by id",
     *   @OA\Parameter(
     *      name="cargo",
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
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return response()->json(null , Response::HTTP_NO_CONTENT);
    }
}
