<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DraftBillOfLading;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DraftBillOfLadingController extends Controller
{
     /**
     * @OA\Get(
     *   path="/api/drafts-bill-of-ladings",
     *   tags={"drafts-bill-of-ladings"},
     *   summary="get all drafts-bill-of-ladings",
     *       description="get all drafts-bill-of-ladings",
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
        return DraftBillOfLading::orderBy('id','desc')->get();
    }

    /**
     * @OA\Patch(
     *   path="/api/drafts-bill-of-ladings",
     *   tags={"drafts-bill-of-ladings"},
     *   summary="create drafts-bill-of-ladings",
     *       description="create drafts-bill-of-ladings",
     *
     *   @OA\RequestBody(
     *     required=true,
     *     @OA\MediaType(
     *       mediaType="application/json",
     *       @OA\Schema(
     *          @OA\Property(
     *           property="draft-bill-of-lading",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="panel_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="issue_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="draft_bill_of_lading_number",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="from_number",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="to_number",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="serial",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="status_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="status_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="description",
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
        $draftBillOfLading = DraftBillOfLading::create($request->all()+['panel_code'=>123456789]);
        return response()->json($draftBillOfLading,Response::HTTP_CREATED);
    }

     /**
     * @OA\Get(
     *   path="/api/drafts-bill-of-ladings/{draft-bill-of-lading}",
     *   tags={"drafts-bill-of-ladings"},
     *   summary="get drafts-bill-of-ladings by id",
     *       description="get drafts-bill-of-ladings by id",
     *   @OA\Parameter(
     *      name="cargo",
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
    public function show(DraftBillOfLading $draft_bill_of_lading)
    {
        return response()->json($draft_bill_of_lading , Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/drafts-bill-of-ladings/{draft-bill-of-lading}",
     *   tags={"drafts-bill-of-ladings"},
     *   summary="update drafts-bill-of-ladings",
     *       description="update drafts-bill-of-ladings",
     *   *     @OA\Parameter(
     *          name="cargo",
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
     *           property="draft-bill-of-lading",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="panel_code",
     *           type="integer",
     *         ),
     *           @OA\Property(
     *           property="issue_date",
     *           type="date",
     *         ),
     *          @OA\Property(
     *           property="draft_bill_of_lading_number",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="from_number",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="to_number",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="serial",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="status_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="status_title",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="description",
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
    public function update(Request $request, DraftBillOfLading $draft_bill_of_lading)
    {
        $draft_bill_of_lading->update($request->all());
        return response()->json($draft_bill_of_lading , Response::HTTP_ACCEPTED);
    }

   /**
     * @OA\Delete(
     *   path="/api/drafts-bill-of-ladings/{draft-bill-of-lading}",
     *   tags={"drafts-bill-of-ladings"},
     *   summary="delete drafts-bill-of-ladings by id",
     *       description="delete drafts-bill-of-ladings by id",
     *   @OA\Parameter(
     *      name="cargo",
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
    public function destroy(DraftBillOfLading $draft_bill_of_lading)
    {
        $draft_bill_of_lading->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
