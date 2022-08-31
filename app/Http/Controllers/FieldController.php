<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FieldController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/fields",
     *   tags={"fields"},
     *   summary="get all fields",
     *       description="get all fields",
     *  @OA\Parameter(
     *      name="is_draft",
     *      in="query",
     *      @OA\Schema(
     *          type="integer"
     *      )
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
    public function index(Request $request)
    {
        return Field::where('is_draft',$request->is_draft)->get();
    }

    /**
     * @OA\Post(
     *   path="/api/fields",
     *   tags={"fields"},
     *   summary="create field",
     *       description="create field",
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
     *           property="title",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="font",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="unique",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="separator",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="length",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="evaluated_field",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="is_draft",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="visible",
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
        $field = Field::create($request->all());
        return response()->json($field,Response::HTTP_CREATED);
    }

     /**
     * @OA\Get(
     *   path="/api/fields/{field}",
     *   tags={"fields"},
     *   summary="get field by id",
     *       description="get field by id",
     *   @OA\Parameter(
     *      name="field",
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
    public function show(Field $field)
    {
        return response()->json($field,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Patch(
     *   path="/api/fields/{field}",
     *   tags={"fields"},
     *   summary="update field",
     *       description="update field",
     *     @OA\Parameter(
     *          name="field",
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
     *           property="title",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="description",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="font",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="unique",
     *           type="integer",
     *         ),
     *
     *           @OA\Property(
     *           property="separator",
     *           type="string",
     *         ),
     *          @OA\Property(
     *           property="length",
     *           type="string",
     *         ),
     *           @OA\Property(
     *           property="evaluated_field",
     *           type="string",
     *         ),
     * *          @OA\Property(
     *           property="is_draft",
     *           type="integer",
     *         ),
     *          @OA\Property(
     *           property="visible",
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
    public function update(Request $request, Field $field)
    {
        $field->update($request->all());
        return response()->json($field,Response::HTTP_ACCEPTED);
    }

    /**
     * @OA\Delete(
     *   path="/api/fields/{field}",
     *   tags={"fields"},
     *   summary="delete field by id",
     *       description="delete field by id",
     *   @OA\Parameter(
     *      name="field",
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
    public function destroy(Field $field)
    {
        $field->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
