<?php

namespace App\Http\Controllers\API;

use App\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Resources\CarResource;
class CarController extends Controller
{
    /**
     * Show all cars
     *
     * @return \Illuminate\Support\Collection
     */
    public function index()
    {
        return CarResource::collection(Car::all())->collection;
    }

    /**
     * Show selected car
     *
     * @param Car $id
     * @return array
     */
    public function show(Car $id)
    {
        return CarResource::make($id)->resolve();
    }

    /**
     * Store a new car
     *
     * @param StoreCarRequest $request
     * @return mixed
     */
    public function store(StoreCarRequest $request)
    {
        return Car::create($request->all());
    }

    /**
     * Delete the selected car
     *
     * @param string $id
     * @return int
     */
    public function destroy(string $id)
    {
        return Car::destroy($id);
    }
}
