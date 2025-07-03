<?php

namespace App\Models\General;

use App\Traits\HasFile;
use App\Traits\HasStatus;
use App\Traits\HasTranslations;
use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Reference extends Model
{
    use HasFactory, Scopes, HasStatus, HasTranslations, HasFile, Sortable;

    protected $fillable = [
        'name',
        'code',
        'table_name',
        'status',
        'position',
        'image',
        'search_count',
    ];

    public $translatable = [
        'name'
    ];

    public $fileFields = [
        'image'
    ];
}
