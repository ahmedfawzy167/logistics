<?php

namespace App\Http\Controllers\Api\V1;

use App\Traits\ApiResponder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Quote\StoreQuoteRequest;
use App\Http\Resources\Quotes\QuoteResource;
use App\Models\Quote;

class QuoteController extends Controller
{
    use ApiResponder;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::all();
        return $this->success(QuoteResource::collection($quotes));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuoteRequest $request)
    {
        $quote = Quote::create($request->validated());
        return $this->created(new QuoteResource($quote), __('admin.quote'));
    }
}
