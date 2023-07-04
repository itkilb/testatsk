<?php

namespace App\Http\Requests;

use App\Models\Car;
use App\Models\CarModel;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class CarUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $maxYear = Car::MAX_YEAR;
        $minYear = Car::MIN_YEAR;

        return [
            "car_brand_id" => "nullable|integer|exists:car_brands,id",
            "car_model_id" => "nullable|integer|exists:car_models,id",
            "year" => "nullable|integer|between:$minYear, $maxYear",
            "mileage" => "nullable|integer",
            "car_color_id" => "nullable|integer|exists:car_colors,id"
        ];
    }

    /**
     * @throws ValidationException
     */
    protected function passedValidation()
    {
        if ($this->car_model_id || $this->car_brand_id) {

            $carModel = CarModel::find($this->car_model_id);

            if ($carModel->car_brand_id != $this->car_brand_id) {
                throw ValidationException::withMessages(['car_model_id' => 'The model must belong to the brand']);
            }
        }
    }
}
