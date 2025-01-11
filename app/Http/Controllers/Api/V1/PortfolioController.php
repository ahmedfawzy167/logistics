<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Portfolios\PortfolioResource;
use App\Models\Portfolio;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    use ApiResponder;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::with('image')->get();
        return $this->success(PortfolioResource::collection($portfolios));
    }
}
