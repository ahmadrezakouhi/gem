<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddressController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/addresses",
     *   tags={"addresses"},
     *   summary="get all addresses",
     *       description="get all addresses",
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
        return AddressResource::collection( Address::orderBy('id','desc')->paginate());
    }

    /**
     * @OA\Post(
     *   path="/api/addresses",
     *   tags={"addresses"},
     *   summary="create address",
     *       description="create address",
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *         @OA\Property(
     *           property="sender_reciver_id",
     *           description="foreign key to senders_recivers table",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="province_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="province_title",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="city_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="city_title",
     *           type="string",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="postal_code",
     *           type="string",
     *         ),
     *
     * *           @OA\Property(
     *           property="address",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="status",
     *           type="integer",
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
        $address = Address::create($request->all());
        return response( new AddressResource($address),Response::HTTP_CREATED);
    }
/**
     * @OA\Get(
     *   path="/api/addresses/{address}",
     *   tags={"addresses"},
     *   summary="get address by id",
     *       description="get address by id",
     *   @OA\Parameter(
     *      name="address",
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

    public function show(Address $address)
    {
        return response(new AddressResource($address),Response::HTTP_ACCEPTED);
    }

 /**
     * @OA\Patch(
     *   path="/api/addresses/{address}",
     *   tags={"addresses"},
     *   summary="update address",
     *       description="update address",
     *  *   @OA\Parameter(
     *      name="address",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *
     *          type="integer"
     * )
     *
     *
     * ),
     *
     *
     *
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *         @OA\Property(
     *           property="sender_reciver_id",
     *           description="foreign key to senders_recivers table",
     *           type="integer",
     *         ),
     *          *          @OA\Property(
     *           property="province_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="province_title",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="city_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="city_title",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="postal_code",
     *           type="string",
     *         ),
     *
     * *           @OA\Property(
     *           property="address",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="status",
     *           type="integer",
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


    public function update(Request $request, Address $address)
    {
        $address->update($request->all());
        return response(new AddressResource($address),Response::HTTP_ACCEPTED);

    }

   /**
     * @OA\Delete(
     *   path="/api/addresses/{address}",
     *   tags={"addresses"},
     *   summary="delete address ",
     *       description="delete address ",
     *   @OA\Parameter(
     *      name="address",
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
    public function destroy(Address $address)
    {
        $address->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
