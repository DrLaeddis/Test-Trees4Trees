<?php

namespace App\Http\Controllers;

use App\MapBox;
use Illuminate\Http\Request;

class MapboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataset = Mapbox::datasets()->create();
        // or
        $dataset = Mapbox::datasets()->create([
            'name' => 'My Dataset',
            'description' => 'A new Mapbox Dataset',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MapBox  $mapBox
     * @return \Illuminate\Http\Response
     */
    public function show(MapBox $mapBox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MapBox  $mapBox
     * @return \Illuminate\Http\Response
     */
    public function edit(MapBox $mapBox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MapBox  $mapBox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MapBox $mapBox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MapBox  $mapBox
     * @return \Illuminate\Http\Response
     */
    public function destroy(MapBox $mapBox)
    {
        //
    }
}
