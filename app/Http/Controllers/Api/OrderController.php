<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/orders",
     *   tags={"orders"},
     *   summary="get all orders",
     *       description="get all orders",
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
        return OrderResource::collection(Order::paginate());
    }

    /**
     * @OA\Post(
     *   path="/api/orders",
     *   tags={"orders"},
     *   summary="create order",
     *       description="create order",
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
     *           property="order_number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="order_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="transaction_number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="transaction_date",
     *           type="date",
     *         ),
     *
     *           @OA\Property(
     *           property="request_number",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="request_date",
     *           type="date",
     *         ),
     *           @OA\Property(
     *           property="buyer_agent_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="buyer_agent_last_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="seller_agent_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="seller_agent_last_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_code",
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
     *           property="sender_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_address",
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
     *           property="sender_phones",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_code",
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
     *           property="receiver_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_address",
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
     *           property="receiver_phones",
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
        $order = Order::create($request->all()+["panel_code"=>'123456789']);
        return response()->json(new OrderResource($order),Response::HTTP_CREATED);
    }

     /**
     * @OA\Get(
     *   path="/api/orders/{order}",
     *   tags={"orders"},
     *   summary="get order by id",
     *       description="get order by id",
     *   @OA\Parameter(
     *      name="order",
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
    public function show(Order $order)
    {
        return response()->json(new OrderResource($order),Response::HTTP_ACCEPTED);
    }

      /**
     * @OA\Patch(
     *   path="/api/orders/{order}",
     *   tags={"orders"},
     *   summary="update order",
     *       description="update order",
     **     @OA\Parameter(
     *          name="order",
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
     *           property="panel_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="order_number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="order_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="transaction_number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="transaction_date",
     *           type="date",
     *         ),
     *
     *           @OA\Property(
     *           property="request_number",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="request_date",
     *           type="date",
     *         ),
     *           @OA\Property(
     *           property="buyer_agent_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="buyer_agent_last_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="seller_agent_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="seller_agent_last_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_code",
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
     *           property="sender_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_address",
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
     *           property="sender_phones",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_code",
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
     *           property="receiver_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="receiver_address",
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
     *           property="receiver_phones",
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
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return response()->json(new OrderResource($order),Response::HTTP_ACCEPTED);
    }

      /**
     * @OA\Delete(
     *   path="/api/orders/{order}",
     *   tags={"orders"},
     *   summary="delete order by id",
     *       description="delete order by id",
     *   @OA\Parameter(
     *      name="order",
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
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(null , Response::HTTP_NO_CONTENT);
    }
}
