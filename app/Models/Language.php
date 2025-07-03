<?php

namespace App\Models;

use App\Traits\HasFile;
use App\Traits\HasStatus;
use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Language extends Model
{
    use HasFactory, Scopes, HasStatus, Sortable, HasFile;

    protected $fillable = [
        'name',
        'url',
        'image',
        'status',
        'default'
    ];

    public $fileFields = [
        'image'
    ];

    protected $attributes = [
        'status' => 'active',
        'default' => false,
    ];
}
