<?php

namespace App\Http\Resources\Application;

use App\Enums\General\ApplicationEntityEnum;
use App\Enums\General\ApplicationStatusEnum;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationShowResource extends JsonResource
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
            'entity' => ApplicationEntityEnum::translate($this->entity),
            'inn' => $this->inn,
            'name' => $this->name,
            'number' => $this->number,
            'title' => $this->title,
            'content' => $this->content,
            'file' => $this->getFile('file'),
            'answered_at' => formatDateTime($this->answered_at),
            'created_at' => formatDateTime($this->created_at),
            'response_url' => $this->response_url,
            'status' => ApplicationStatusEnum::translate($this->status),
        ];
    }
}
