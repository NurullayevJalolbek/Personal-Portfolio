<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Scopes;

class UserAction extends Model
{
    use Scopes;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
