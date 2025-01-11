<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Services\ServiceResource;
use App\Traits\ApiResponder;

class ServiceController extends Controller
{
    use ApiResponder;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return $this->success(ServiceResource::collection($services));
    }
}
