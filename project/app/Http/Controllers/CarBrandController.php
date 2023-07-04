<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CarBrandController extends Controller
{
    /**
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return JsonResource::collection(CarBrand::all());
    }
}
