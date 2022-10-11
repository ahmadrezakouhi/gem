<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CortexResource;
use App\Models\Cortex;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CortexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CortexResource::collection(Cortex::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cortex  = Cortex::create($request->all());
        return response()->json(new CortexResource($cortex),Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cortex $cortex)
    {
        return response()->json(new CortexResource($cortex),Response::HTTP_ACCEPTED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cortex $cortex)
    {
        $cortex->update($request->all());
        return response()->json(new CortexResource($cortex),Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cortex $cortex)
    {
        $cortex->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
