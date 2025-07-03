<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasFile;
use App\Traits\Scopes;

class Developer extends Model
{
    use Scopes, HasFile;

    protected $fillable = [
        'fullname',
        'degree',
        'internship',
        'phone',
        'status',
    ];

    public $fileFields = [
        'image'
    ];
}
