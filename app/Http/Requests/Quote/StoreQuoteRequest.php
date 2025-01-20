<?php

namespace App\Http\Requests\Quote;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'freight_type' => 'required|string',
            'city_departure' => 'required|string',
            'delivery_city' => 'required|string',
            'incoterms' => 'required|string',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'width' => 'required|numeric',
            'length' => 'required|numeric',
            'fragile' => 'boolean',
            'express_delivery' => 'boolean',
            'insurance' => 'boolean',
            'packaging' => 'boolean',
        ];
    }
}
