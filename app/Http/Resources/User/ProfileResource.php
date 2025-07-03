<?php

namespace App\Http\Resources\User;

use App\Http\Resources\General\ReferenceResource;
use App\Http\Resources\Role\RoleResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    private $cabinet = null;
    public function __construct($resource, $cabinet = null)
    {
        $this->resource = $resource;
        $this->cabinet = $cabinet;
    }
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
            'surname' => $this->surname,
            'name' => $this->name,
            'patronymic' => $this->patronymic,
            'birthdate' => formatDate($this->birthdate),
            'region' => new ReferenceResource($this->region),
            'passport' => $this->passport,
            'issue_date' => formatDate($this->issue_date),
            'expiration_date' => formatDate($this->expiration_date),
            'pinfl' => $this->pinfl,
            'phone' => $this->phone,
            'is_verify' => !is_null($this->phone),
            'image' => $this->getFile('image'),
            'roles' => RoleResource::collection($this->roles),
            'cabinet' => $this->cabinet,
        ];
    }
}
