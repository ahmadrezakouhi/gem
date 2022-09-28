<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TransportContract;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Transport;

class TransportCotractController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/transport-contracts",
     *   tags={"transport-contracts"},
     *   summary="get all transport contracts",
     *       description="get all transport contracts",
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
        return TransportContract::orderBy('id','desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transport_contract = TransportContract::create($request->all()+['panel_code'=>'123456789']);
        return response()->json($transport_contract,Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *   path="/api/transport-contracts/{transport_contract}",
     *   tags={"transport-contracts"},
     *   summary="get transport contract by id",
     *       description="get transport contract by id",
     *   @OA\Parameter(
     *      name="transport_contract",
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
    public function show(TransportContract $transport_contract)
    {
        return response()->json($transport_contract,Response::HTTP_ACCEPTED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransportContract $transport_contract)
    {
        $transport_contract->update($request->all());
        return response()->json($transport_contract,Response::HTTP_ACCEPTED);
    }

   /**
     * @OA\Delete(
     *   path="/api/transport-contracts/{transport_contract}",
     *   tags={"transport-contracts"},
     *   summary="delete transport contract by id",
     *       description="delete transpornt contract by id",
     *   @OA\Parameter(
     *      name="transport_contract",
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
    public function destroy(TransportContract $transport_contract)
    {
        $transport_contract->delete();
        return response()->json(null , Response::HTTP_NO_CONTENT);
    }
}
