<?php

namespace App\Http\Resources\Application;

use App\Enums\General\ApplicationStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
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
            'fullname' => $this->fullname,
            'pinfl' => $this->pinfl,
            'inn' => $this->inn,
            'name' => $this->name,
            'number' => $this->number,
            'title' => $this->title,
            'created_at' => formatDateTime($this->created_at),
            'status' => ApplicationStatusEnum::translate($this->status),
        ];
    }
}
