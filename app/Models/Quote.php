<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'freight_type',
        'city_departure',
        'delivery_city',
        'incoterms',
        'weight',
        'height',
        'width',
        'length',
        'fragile',
        'express_delivery',
        'insurance',
        'packaging',
    ];
}
