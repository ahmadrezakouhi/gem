<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OwnerResource;
use App\Models\Owner;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnerController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/owners",
     *   tags={"owners"},
     *   summary="get all owners",
     *       description="get all owners",
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
        return OwnerResource::collection(Owner::orderBy('id','desc')->get());
    }

    /**
     * @OA\Post(
     *   path="/api/owners",
     *   tags={"owners"},
     *   summary="create owner",
     *       description="create owner",
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
     *           property="code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="last_name",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="phones",
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
        $owner = Owner::create($request->all()+['panel_code'=>'123456789']);
        return response()->json(new OwnerResource($owner),Response::HTTP_CREATED);
    }

      /**
     * @OA\Get(
     *   path="/api/owners/{owner}",
     *   tags={"owners"},
     *   summary="get owner by id",
     *       description="get owner by id",
     *   @OA\Parameter(
     *      name="owner",
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
    public function show(Owner $owner)
    {
        return response()->json(new OwnerResource($owner),Response::HTTP_ACCEPTED);
    }

     /**
     * @OA\Patch(
     *   path="/api/owners/{owner}",
     *   tags={"owners"},
     *   summary="update owner",
     *       description="update owner",
     *     @OA\Parameter(
     *          name="owner",
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
     *           property="code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="last_name",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="phones",
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
    public function update(Request $request, Owner $owner)
    {
        return response()->json(new OwnerResource($owner),Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/owners/{owner}",
     *   tags={"owners"},
     *   summary="delete owner by id",
     *       description="delete owner by id",
     *   @OA\Parameter(
     *      name="owner",
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
    public function destroy(Owner $owner)
    {
        $owner->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
