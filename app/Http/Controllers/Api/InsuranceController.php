<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Insurance;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InsuranceController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/insurances",
     *   tags={"insurances"},
     *   summary="get all insurances",
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
    public function index()
    {
        return Insurance::orderBy('id','desc')->paginate();
    }

    /**
     * @OA\Post(
     *   path="/api/insurances",
     *   tags={"insurances"},
     *   summary="update insurance",
     *       description="update insurance",
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
     *           property="insurance_company_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="insurance_company_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_policy_number",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="start_date",
     *           type="date",
     *         ),
     *
     *           @OA\Property(
     *           property="end_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="active",
     *           type="integer",
     *           default="0"
     *         ),
     *           @OA\Property(
     *           property="default",
     *           type="integer",
     *           default="0"
     *         ),
     * *          @OA\Property(
     *           property="type",
     *           type="string",
     *
     *         ),
     *          @OA\Property(
     *           property="insurance_company_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_phone",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_province",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_economic_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_site",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_mobile",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_phone",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_address",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="agent_fax",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_email",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="query_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="issue_date",
     *           type="date",
     *         ),
     *          @OA\Property(
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
        $insurnace = Insurance::create($request->all());
        return response()->json($insurnace,Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *   path="/api/insurances/{insurance}",
     *   tags={"insurances"},
     *   summary="get insurance by id",
     *       description="get insurance by id",
     *   @OA\Parameter(
     *      name="insurance",
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
    public function show(Insurance $insurance)
    {
        return response()->json($insurance,Response::HTTP_ACCEPTED);
    }

     /**
     * @OA\Patch(
     *   path="/api/insurances/{insurance}",
     *   tags={"insurances"},
     *   summary="update insurance",
     *       description="update insurance",
     *     @OA\Parameter(
     *          name="insurance",
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
     *           property="insurance_company_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="insurance_company_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_policy_number",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="start_date",
     *           type="date",
     *         ),
     *
     *           @OA\Property(
     *           property="end_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="active",
     *           type="integer",
     *           default="0"
     *         ),
     *           @OA\Property(
     *           property="default",
     *           type="integer",
     *           default="0"
     *         ),
     * *          @OA\Property(
     *           property="type",
     *           type="string",
     *
     *         ),
     *          @OA\Property(
     *           property="insurance_company_national_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_phone",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_province",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_city",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_economic_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_postal_code",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="insurance_company_site",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_name",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_mobile",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_phone",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_address",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="agent_fax",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="agent_email",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="query_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="issue_date",
     *           type="date",
     *         ),
     *          @OA\Property(
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
    public function update(Request $request, Insurance $insurance)
    {
        $insurance->update($request->all());
        return response()->json($insurance,Response::HTTP_ACCEPTED);
    }

/**
     * @OA\Delete(
     *   path="/api/insurances/{insurance}",
     *   tags={"insurances"},
     *   summary="delete insurance by id",
     *       description="delete insurance by id",
     *   @OA\Parameter(
     *      name="insurance",
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
    public function destroy(Insurance $insurance)
    {
        $insurance->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
