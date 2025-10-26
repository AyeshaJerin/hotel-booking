<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data=Hotel::get();
        return view('hotel.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Hotel::create($request->all());
       return redirect()->route('hotel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
      return view('hotel.edit',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {
      $hotel->update($request->all());
       return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
         $hotel->delete();
       return redirect()->route('hotel.index');
    }
}
