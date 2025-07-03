<?php

namespace App\Models\General;

use App\Traits\HasStatus;
use App\Traits\HasTranslations;
use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    use HasFactory, HasTranslations, Scopes, HasStatus;

    protected $fillable = [
        'question',
        'answer',
        'status',
    ];

    public $translatable = [
        'question',
        'answer',
    ];
}
