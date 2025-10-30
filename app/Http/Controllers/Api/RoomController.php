<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Room::with('hotel')->get();
        return response()->json($data, 200);
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
    public function edit(Room $room)
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
    public function destroy(Room $room)
    {
       $room->delete();
        return response()->json(['message'=>'Room deleted successfully'],200);
    }

    public function getRoomByHotel($id){
        $data = Room::where('hotel_id',$id)->get();
        return response()->json($data, 200);
    }
}
