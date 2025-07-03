<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Traits\HasTranslations;
use App\Traits\HasStatus;
use App\Traits\Scopes;

class Program extends Model
{
    use HasFactory, Scopes, HasStatus, Sortable, HasTranslations;

    protected $fillable = [
        'name',
        'code',
        'status',
    ];
}
