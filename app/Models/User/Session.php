<?php

namespace App\Models\User;

use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory, Scopes;

    protected $keyType = 'string';
}
