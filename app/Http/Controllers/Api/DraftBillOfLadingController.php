<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DraftBillOfLading;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DraftBillOfLadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DraftBillOfLading::orderBy('id','desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $draftBillOfLading = DraftBillOfLading::create($request->all());
        return response()->json($draftBillOfLading,Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(DraftBillOfLading $draftBillOfLading)
    {
        return response()->json($draftBillOfLading , Response::HTTP_ACCEPTED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DraftBillOfLading $draftBillOfLading)
    {
        $draftBillOfLading->update($request->all());
        return response()->json($draftBillOfLading , Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DraftBillOfLading $draftBillOfLading)
    {
        $draftBillOfLading->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
