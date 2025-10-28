<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Booking::with('hotel')->get();
        return response()->json($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $requestdata= $request->all();
        Booking::create($requestdata);
        return response()->json(['message'=>'Booking created successfully'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
       return response()->json($booking, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return response()->json(['message'=>'Booking updated successfully'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
       $booking->delete();
        return response()->json(['message'=>'Booking deleted successfully'],200);
    }

    public function booking(){

    }
}
