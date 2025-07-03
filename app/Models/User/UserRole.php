<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasStatus;
use App\Traits\Scopes;

class UserRole extends Model
{
    use HasFactory, Scopes, HasStatus;

    protected $fillable = [
        'role_id',
        'user_id',
        'status',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
