<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SenderReceiver;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SenderReceiverController extends Controller
{


    /**
     * @OA\Get(
     *   path="/api/senders-receivers",
     *   tags={"senders-receivers"},
     *   summary="get all senders and receivers",
     *       description="get all senders and receivers",
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
        return SenderReceiver::with('addresses')->orderBy('id','desc')->paginate();
    }

/**
     * @OA\Post(
     *   path="/api/senders-receivers/{sender_receiver}",
     *   tags={"senders-receivers"},
     *   summary="update sender receiver",
     *       description="update sender receiver",
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
        $sender_receiver = SenderReceiver::create($request->all()+['panel_code'=>'123456789']);
        $this->createAddressesForSenderReceiver($sender_receiver,$request->addresses);
        return response($sender_receiver , Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SenderReceiver $sender_receiver)
    {
        return response($sender_receiver->load('addresses'),Response::HTTP_ACCEPTED);
    }

   /**
     * @OA\Patch(
     *   path="/api/senders-receivers/{sender_receiver}",
     *   tags={"senders-receivers"},
     *   summary="update sender receiver",
     *       description="update sender receiver",
     *      @OA\Parameter(
     *      name="sender_receiver",
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
    public function update(Request $request, SenderReceiver $sender_receiver)
    {
        $sender_receiver->addresses()->delete();
        $this->createAddressesForSenderReceiver($sender_receiver,$request->addresses);
        $sender_receiver->update($request->all());
        return response($sender_receiver,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/senders-receivers/{sender-receiver}",
     *   tags={"senders-receivers"},
     *   summary="delete senders or receivers",
     *       description="delete senders or receivers",
      *   @OA\Parameter(
     *      name="sender-receiver",
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
    public function destroy(SenderReceiver $sender_receiver)
    {
        $sender_receiver->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }






    private function createAddressesForSenderReceiver(SenderReceiver $sender_receiver, array $addresses){
        foreach ($addresses as $address) {
            $sender_receiver->addresses()->create($address);
        }
    }
}
