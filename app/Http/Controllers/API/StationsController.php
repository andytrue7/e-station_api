<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StationRequest;
use App\Station;
use Illuminate\Http\Request;

class StationsController extends Controller
{

    public function index()
    {
        return Station::get();
    }


    public function store(StationRequest $request)
    {
        $station = Station::create($request->all());
        return response()->json($station, 201);
    }


    public function show(Station $station)
    {
        return $station;
    }


    public function update(StationRequest $request, Station $station)
    {
        $station->update($request->all());
        return response()->json($station, 200);
    }


    public function destroy(Station $station)
    {
        $station->delete();
        return response()->json(null, 204);
    }
}
