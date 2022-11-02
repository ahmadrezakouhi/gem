<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KartexResource;
use App\Models\Kartex;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KartexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return KartexResource::collection(Kartex::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kartex = Kartex::create($request->all());
        return response()->json(new KartexResource($kartex),Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kartex $kartex)
    {
        return response()->json(new KartexResource($kartex),Response::HTTP_ACCEPTED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kartex $kartex)
    {
        $kartex->update($request->all());
        return response()->json(new KartexResource($kartex),Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kartex $kartex)
    {
        $kartex->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
