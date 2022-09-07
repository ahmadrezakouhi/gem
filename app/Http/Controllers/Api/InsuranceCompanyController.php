<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\InsuranceCompanyResource;
use App\Models\InsuranceCompany;
use Illuminate\Http\Request;

class InsuranceCompanyController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/insurance-companies",
     *   tags={"insurance-companies"},
     *   summary="get all insurance companies",
     *       description="get all insurance companies",
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
        return InsuranceCompanyResource::collection(InsuranceCompany::orderBy('id','desc')->get());
    }


}
