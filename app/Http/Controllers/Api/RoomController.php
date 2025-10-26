<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Room::get();
        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $requestdata= $request->all();
        Room::create($requestdata);
        return response()->json(['message'=>'Room created successfully'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
       return response()->json($room, 200);
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
    public function update(Request $request, Room $room)
    {
        $room->update($request->all());
        return response()->json(['message'=>'Room updated successfully'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $room->delete();
        return response()->json(['message'=>'Room deleted successfully'],200);
    }
}
