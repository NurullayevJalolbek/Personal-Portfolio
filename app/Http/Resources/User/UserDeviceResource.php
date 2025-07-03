<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserDeviceResource extends JsonResource
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
            'token_id' => $this->token?->id,
            'ip' => $this->ip,
            'platform' => $this->platform,
            'device_name' => $this->device_name,
            'is_current' => $this->token_id == $request->user()->currentAccessToken()->id,
            'last_used_at' => formatDateTime($this->token?->last_used_at, 'H:i:s d.m.Y'),
        ];
    }
}
