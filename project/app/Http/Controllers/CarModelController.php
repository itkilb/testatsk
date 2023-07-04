<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CarModelController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return JsonResource::collection(CarModel::all());
    }
}
