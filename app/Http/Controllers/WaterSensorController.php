<?php

namespace App\Http\Controllers;

use App\WaterSensor;
use Illuminate\Http\Request;

class WaterSensorController extends Controller
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
        //
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
     * @param  \App\WaterSensor  $waterSensor
     * @return \Illuminate\Http\Response
     */
    public function show(WaterSensor $waterSensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WaterSensor  $waterSensor
     * @return \Illuminate\Http\Response
     */
    public function edit(WaterSensor $waterSensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WaterSensor  $waterSensor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WaterSensor $waterSensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WaterSensor  $waterSensor
     * @return \Illuminate\Http\Response
     */
    public function destroy(WaterSensor $waterSensor)
    {
        //
    }

    public function getLastWaterState()
    {
        return response((new WaterSensor)
        ->getWaterStateNow(), 200);
    }

    public function getWaterState($limit)
    {
        return response((new WaterSensor)
        ->getWaterState($limit), 200);
    }

    public function getWaterStatePerDays($days)
    {
        return response((new WaterSensor)
            ->getWaterStatePerDays($days), 200);
    }

    public function getLightStatusBetweenDates($firstDate, $secondDate)
    {
        return response((new WaterSensor)
            ->betweenDates($firstDate, $secondDate), 200);
    }
}
