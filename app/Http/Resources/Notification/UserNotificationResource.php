<?php

namespace App\Http\Resources\Notification;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserNotificationResource extends JsonResource
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
            'title' => $this->notification?->title,
            'body' => $this->notification?->body,
            'sent_at' => formatDateTime($this->created_at, 'H:i:s d.m.Y'),
            'is_seen' => !is_null($this->seen_at),
        ];
    }
}
