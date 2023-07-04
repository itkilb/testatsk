<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarCreateRequest;
use App\Http\Requests\CarUpdateRequest;
use App\Models\Car;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResource
     */
    public function index()
    {
        return JsonResource::make(Car::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param CarCreateRequest $request
     * @return Response
     */
    public function store(CarCreateRequest $request)
    {
       $car = new Car();
       $car->fill($request->all())->save();

       return response()->noContent();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResource|Response
     */
    public function show($id)
    {
        $car = Car::find($id);

        if (is_null($car)) return response()->noContent(404);

        return JsonResource::make($car);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param CarUpdateRequest $request
     * @param int $id
     * @return Response
     */
    public function update(CarUpdateRequest $request, $id)
    {
        $car = Car::find($id);

        if (is_null($car)) return response()->noContent(404);

        $car->update($request->all());

        return response()->noContent();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        if (is_null($car)) return response()->noContent(404);

        $car->delete();
        return response()->noContent();
    }
}
