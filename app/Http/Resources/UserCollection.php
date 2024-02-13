<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'docs' => UserResource::collection($this->collection),
            'meta' => [
                'perPage' => $this->perPage(),
                'totalDocs' => $this->total(),
                'totalPages' => $this->lastPage(),
                'currentPage' => $this->currentPage(),
                'nextPage' => $this->nextPageUrl(),
                'prevPage' => $this->previousPageUrl(),
            ]
        ];
    }
}
