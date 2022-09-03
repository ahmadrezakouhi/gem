<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BillOfLading;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BillOfLadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BillOfLading::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bill_of_lading = BillOfLading::create($request->all());
        return response()->json($bill_of_lading,Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BillOfLading $bill_of_lading)
    {
        return response()->json($bill_of_lading,Response::HTTP_ACCEPTED);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BillOfLading $bill_of_lading)
    {
        $bill_of_lading->update($request->all());
        return response()->json($bill_of_lading,Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BillOfLading $bill_of_lading)
    {
        $bill_of_lading->delete();
        return response()->json(null,Response::HTTP_NO_CONTENT);
    }
}
