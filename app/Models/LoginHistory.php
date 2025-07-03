<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Scopes;

class LoginHistory extends Model
{
    use Scopes;

    protected $guarded = ['id'];
}
