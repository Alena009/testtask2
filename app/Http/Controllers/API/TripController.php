<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTripRequest;
use App\Http\Resources\TripResource;
use App\Trip;

class TripController extends Controller
{
    /**
     * Show all trips
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        return TripResource::collection(Trip::all())->collection;
    }

    /**
     * Store a new trip
     *
     * @param StoreTripRequest $request
     * @return mixed
     */
    public function store(StoreTripRequest $request)
    {
        return Trip::create($request->all());
    }
}
