<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BillItem;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BillItemController extends Controller
{
     /**
     * @OA\Get(
     *   path="/api/bill-items",
     *   tags={"bill items"},
     *   summary="get all bill items",
     *       description="get all bill items",
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
        return BillItem::orderBy('id','desc')->get();
    }

    /**
     * @OA\Post(
     *   path="/api/bill_items",
     *   tags={"bill items"},
     *   summary="create bill item",
     *       description="create bill item",
     *
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="Bill_Id",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="Draft_Number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="Draft_Serial",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="Order_Number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="Kartex_Number",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="M_Name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="M_NameCode",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="M_OriginWeigth",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="M_PackCount",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="M_LoadLocation",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="M_LoadLocationCode",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="M_Value",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="M_Description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="M_TrafficStatus",
     *           type="boolean",
     *         ),

     *          @OA\Property(
     *           property="M_FireStatus",
     *           type="boolean",
     *         ),

     *          @OA\Property(
     *           property="M_PlanStatus",
     *           type="boolean",
     *         ),

     *          @OA\Property(
     *           property="M_PacketType",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="M_PacketTypeCode",
     *           type="integer",
     *         ),

     *          @OA\Property(
     *           property="M_LoadOwner",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="M_LoadingOwnerCode",
     *           type="integer",
     *         ),

     *          @OA\Property(
     *           property="M_IranCode",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="M_DestinationWeigth",
     *           type="integer",
     *         ),

     *          @OA\Property(
     *           property="BI_Field1",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field2",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field3",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field4",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field5",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="BI_Field6",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field7",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field8",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field9",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field10",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field11",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_Field12",
     *           type="string",
     *         ),

     *          @OA\Property(
     *           property="BI_ItemNumber",
     *           type="integer",
     *         ),

     *          @OA\Property(
     *           property="BI_Delivered",
     *           type="boolean",
     *         ),

     *          @OA\Property(
     *           property="BI_DeliveredTime",
     *           type="date",
     *         ),

     *          @OA\Property(
     *           property="BI_DeliverUserId",
     *           type="integer",
     *         ),

     *          @OA\Property(
     *           property="BI_DeliverUserName",
     *           type="string",
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
        $bill_item = BillItem::create($request->all());
        return response()->json($bill_item,Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *   path="/api/bill-items/{bill_item}",
     *   tags={"bill items"},
     *   summary="get bill item by id",
     *       description="get bill item by id",
     *   @OA\Parameter(
     *      name="bill_item",
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
    public function show(BillItem $bill_item)
    {
        return response()->json($bill_item,Response::HTTP_ACCEPTED);
    }

     /**
     * @OA\Patch(
     *   path="/api/bill-items/{bill_item}",
     *   tags={"bill items"},
     *   summary="update bill item",
     *       description="update bill item",
     *   *     @OA\Parameter(
     *          name="bill_item",
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
     *           property="Bill_Id",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="Draft_Number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="Draft_Serial",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="Order_Number",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="Kartex_Number",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="M_Name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="M_NameCode",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="M_OriginWeigth",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="M_PackCount",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="M_LoadLocation",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="M_LoadLocationCode",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="M_Value",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="M_Description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="M_TrafficStatus",
     *           type="boolean",
     *         ),
     *
     *          @OA\Property(
     *           property="M_FireStatus",
     *           type="boolean",
     *         ),
     *
     *          @OA\Property(
     *           property="M_PlanStatus",
     *           type="boolean",
     *         ),
     *
     *          @OA\Property(
     *           property="M_PacketType",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="M_PacketTypeCode",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="M_LoadOwner",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="M_LoadingOwnerCode",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="M_IranCode",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="M_DestinationWeigth",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field1",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field2",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field3",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field4",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field5",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field6",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field7",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field8",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field9",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field10",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field11",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Field12",
     *           type="string",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_ItemNumber",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_Delivered",
     *           type="boolean",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_DeliveredTime",
     *           type="date",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_DeliverUserId",
     *           type="integer",
     *         ),
     *
     *          @OA\Property(
     *           property="BI_DeliverUserName",
     *           type="string",
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
    public function update(Request $request, BillItem $bill_item)
    {
        $bill_item->update($request->all());
        return response()->json($bill_item,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/bill-items/{bill_item}",
     *   tags={"bill items"},
     *   summary="delete bill item by id",
     *       description="delete bill item by id",
     *   @OA\Parameter(
     *      name="bill_item",
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
    public function destroy(BillItem $bill_item)
    {
        $bill_item->delete();
        return response()->json(null , Response::HTTP_NO_CONTENT);
    }
}
