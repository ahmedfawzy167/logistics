<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\StoreFeedbackRequest;
use App\Http\Resources\Feedbacks\FeedbackResource;
use App\Models\Feedback;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    use ApiResponder;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return $this->success(FeedbackResource::collection($feedbacks));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedbackRequest $request)
    {
        $feedback = new Feedback();
        $feedback->comment = $request->comment;
        $feedback->rating = $request->rating;
        $feedback->save();
        return $this->created(new FeedbackResource($feedback), __('admin.feedback'));
    }
}
