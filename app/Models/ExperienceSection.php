<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExperienceSection extends Model
{
    protected $fillable = [
        'company_url',
        'company_name',
        'position',
        'start_date',
        'end_date',
        'description'
    ];
}
