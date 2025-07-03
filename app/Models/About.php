<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasTranslations;
use App\Traits\HasFile;

class About extends Model
{
    use HasFactory, HasFile, HasTranslations;

    protected $table = 'about';

    protected $fillable = [
        'name',
        'logo',
        'phone',
        'telegram',
        'admin_telegram',
        'instagram',
        'facebook',
        'youtube',
        'twitter',
        'description',
    ];

    public $translatable = [];

    public $fileFields = [
        'logo',
    ];

}
