<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;




class CompanyController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/companies",
     *   tags={"companies"},
     *   summary="get all companies",
     *       description="get all companies",
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
        return Company::orderBy('id','desc')->paginate();
    }
/**
     * @OA\Post(
     *   path="/api/companies",
     *   tags={"companies"},
     *   summary="create company",
     *       description="create company",
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
     *           property="name",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="company_code",
     *           type="string",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="phone",
     *           type="string",
     *         ),
     *
     * *           @OA\Property(
     *           property="fax",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="mobile",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="manager_name",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="manager_last_name",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="presentor_name",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="presentor_last_name",
     *           type="string",
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
        $company = Company::create($request->all());
        return response($company,Response::HTTP_CREATED);
    }

    /**
     * @OA\Get(
     *   path="/api/companies/{company}",
     *   tags={"companies"},
     *   summary="get company by id",
     *       description="get company by id",
     *   @OA\Parameter(
     *      name="company",
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

    public function show(Company $company)
    {
        return response($company,Response::HTTP_ACCEPTED);
    }

  /**
     * @OA\Patch(
     *   path="/api/companies/{company}",
     *   tags={"companies"},
     *   summary="update company",
     *       description="update company",
     *
     *          @OA\Parameter(
     *              name="company",
     *              in="path",
     *              required=true,
     *                  @OA\Schema(
     *
     *                      type="integer"
     * )
     *
     *
     * ),
     *
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
     *           property="name",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="company_code",
     *           type="string",
     *         ),
     *
     *
     *           @OA\Property(
     *           property="phone",
     *           type="string",
     *         ),
     *
     * *           @OA\Property(
     *           property="fax",
     *           type="string",
     *         ),
     *
     *
     *          @OA\Property(
     *           property="mobile",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="manager_name",
     *           type="string",
     *         ),
     *
     *           @OA\Property(
     *           property="manager_last_name",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="presentor_name",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="presentor_last_name",
     *           type="string",
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
    public function update(Request $request, Company $company)
    {
        $company->update($request->all());
        return response($company,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/companies/{comapny}",
     *   tags={"companies"},
     *   summary="delete company by id",
     *       description="delete company by id",
     *   @OA\Parameter(
     *      name="company",
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
    public function destroy(Company $company)
    {
        $company->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
