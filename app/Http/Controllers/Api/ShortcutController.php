<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Shortcut;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShortcutController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/shortcuts",
     *   tags={"shortcuts"},
     *   summary="get all shortcuts",
     *       description="get all shortcuts",
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
        return Shortcut::orderBy('id','desc')->paginate();
    }

    /**
     * @OA\Post(
     *   path="/api/shortcuts",
     *   tags={"shortcuts"},
     *   summary="create shortcut",
     *       description="create shortcut",
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
     *           property="short_cut",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="receiver_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="cargo_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="cargo_description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="package_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="owner_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="location_loading_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="weight",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="quantity",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="value",
     *           type="integer",
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
        $shortcut = Shortcut::create($request->all());
        return response()->json($shortcut,Response::HTTP_CREATED);
    }

   /**
     * @OA\Get(
     *   path="/api/shortcuts/{shortcut}",
     *   tags={"shortcuts"},
     *   summary="get shortcut by id",
     *       description="get shortcut by id",
     *   @OA\Parameter(
     *      name="shortcut",
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
    public function show(Shortcut $shortcut)
    {
        return response()->json($shortcut,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/shortcuts/{shortcut}",
     *   tags={"shortcuts"},
     *   summary="update shortcut",
     *       description="update shortcut",
     *     @OA\Parameter(
     *          name="shortcut",
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
     *           property="short_cut",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="sender_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="receiver_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="cargo_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="cargo_description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="package_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="owner_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="location_loading_code",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="weight",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="quantity",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="value",
     *           type="integer",
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
    public function update(Request $request,Shortcut $shortcut)
    {
        $shortcut->udpate($request->all());
        return response()->json($shortcut,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/shortcuts/{shortcut}",
     *   tags={"shortcuts"},
     *   summary="delete shortcut by id",
     *       description="delete shortcut by id",
     *   @OA\Parameter(
     *      name="shortcut",
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
    public function destroy(Shortcut $shortcut)
    {
        $shortcut->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
