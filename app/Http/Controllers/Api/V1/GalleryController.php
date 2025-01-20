<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Galleries\GalleryResource;
use App\Models\Gallery;

class GalleryController extends Controller
{
    use ApiResponder;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return $this->success(GalleryResource::collection($galleries));
    }
}
