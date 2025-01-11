<?php

namespace App\Http\Resources\Blogs;

use App\Http\Resources\Users\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'user' => new UserResource($this->author),
            'image' => $this->image ? asset('storage/blogs/' . $this->id . '/' . $this->image->path) : null,
        ];
    }
}
