<?php

namespace App\Http\Resources\General;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->translate('name'),
            'title' => $this->translate('title'),
            'code' => $this->code,
            'position' => $this->position,
            'image' => $this->getFile('image'),
            'slider_image' => $this->getFile('slider_image'),
            'status' => $this->status,
        ];
    }
}
