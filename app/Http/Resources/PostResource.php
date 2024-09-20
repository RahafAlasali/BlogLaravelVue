<?php

namespace App\Http\Resources;

use Arr;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CommentResource;
class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {


        // return [
        //     'comments' => CommentResource::collection($this->comment),
        //     $this->merge(parent::toArray($request))
        // ];
        return parent::toArray($request);
    }
}