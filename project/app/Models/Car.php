<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    const MAX_YEAR = 2023;
    const MIN_YEAR = 1900;

    protected $fillable = ['car_brand_id', 'car_model_id', 'year', 'mileage', 'car_color_id'];
}
