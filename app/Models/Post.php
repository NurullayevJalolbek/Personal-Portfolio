<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Traits\HasTranslations;
use App\Traits\HasStatus;
use App\Traits\HasFile;
use App\Traits\Scopes;

class Post extends Model
{
    use HasFactory, Scopes, HasStatus, Sortable, HasTranslations, HasFile;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
    ];

    public $fileFields = [
        'image'
    ];
}
