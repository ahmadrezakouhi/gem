<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SenderReciver;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SenderReciverController extends Controller
{


    /**
     * @OA\Get(
     *   path="/api/senders-recivers",
     *   tags={"senders-recivers"},
     *   summary="get all senders and recivers",
     *       description="get all senders and recivers",
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
        return SenderReciver::paginate();
    }

/**
     * @OA\Post(
     *   path="/api/senders-recivers/{sender_reciver}",
     *   tags={"senders-recivers"},
     *   summary="update sender reciver",
     *       description="update sender reciver",
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *         @OA\Property(
     *           property="panel_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="national_code",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="title",
     *           type="string",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="name",
     *           type="string",
     *         ),
     *
     * *           @OA\Property(
     *           property="last_name",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="economic_code",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="postal_code",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="address",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="phone",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="mobile",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="fax",
     *           type="string",
     *         ),
     *
     *            @OA\Property(
     *           property="email",
     *           type="string",
     *         ),
     *            @OA\Property(
     *           property="status",
     *           type="integer",
     *         ),
     *
     *        ),
     *     ),
     *   ),
     *
     *
     *
     *
     *
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
    public function store(Request $request)
    {
        $sender_reciver = SenderReciver::create($request->all());
        return response($sender_reciver , Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SenderReciver $sender_reciver)
    {
        return response($sender_reciver,Response::HTTP_ACCEPTED);
    }

   /**
     * @OA\Patch(
     *   path="/api/senders-recivers/{sender_reciver}",
     *   tags={"senders-recivers"},
     *   summary="update sender reciver",
     *       description="update sender reciver",
     *      @OA\Parameter(
     *      name="sender_reciver",
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
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *         @OA\Property(
     *           property="panel_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="national_code",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="title",
     *           type="string",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="name",
     *           type="string",
     *         ),
     *
     * *           @OA\Property(
     *           property="last_name",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="economic_code",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="postal_code",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="address",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="phone",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="mobile",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="fax",
     *           type="string",
     *         ),
     *
     *            @OA\Property(
     *           property="email",
     *           type="string",
     *         ),
     *            @OA\Property(
     *           property="status",
     *           type="integer",
     *         ),
     *
     *        ),
     *     ),
     *   ),
     *
     *
     *
     *
     *
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
    public function update(Request $request, SenderReciver $sender_reciver)
    {
        $sender_reciver->update($request->all());
        return response($sender_reciver,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/senders-recivers/{sender-reciver}",
     *   tags={"senders-recivers"},
     *   summary="delete senders or recivers",
     *       description="delete senders or recivers",
      *   @OA\Parameter(
     *      name="sender-reciver",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *
     *          type="integer"
     * ),
     * ),
     *
     *   @OA\Response(
     *      response=204,
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
    public function destroy(SenderReciver $sender_reciver)
    {
        $sender_reciver->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
