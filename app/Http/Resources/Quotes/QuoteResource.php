<?php

namespace App\Http\Resources\Quotes;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class QuoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'freight_type' => $this->freight_type,
            'city_departure' => $this->city_departure,
            'delivery_city' => $this->delivery_city,
            'incoterms' => $this->incoterms,
            'weight' => $this->weight,
            'height' => $this->height,
            'width' => $this->width,
            'length' => $this->length,
            'fragile' => $this->fragile,
            'express_delivery' => $this->express_delivery,
            'insurance' => $this->insurance,
            'packaging' => $this->packaging,
        ];
    }
}
