<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = ['title', 'description'];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
