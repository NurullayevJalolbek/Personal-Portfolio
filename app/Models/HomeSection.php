<?php

namespace App\Models;

use App\Traits\HasFile;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class HomeSection extends Model
{
    use HasFile, HasApiTokens;
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'background_image',
        'image'
    ];


}
