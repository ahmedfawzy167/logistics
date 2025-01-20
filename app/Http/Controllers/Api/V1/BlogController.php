<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blogs\BlogResource;
use App\Models\Blog;
use App\Traits\ApiResponder;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use ApiResponder;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::with('image')->get();
        return $this->success(BlogResource::collection($blogs));
    }

    public function show(Blog $blog)
    {
        return $this->success(new BlogResource($blog));
    }
}
