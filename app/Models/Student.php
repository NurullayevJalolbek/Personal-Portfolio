<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasStatus;
use App\Traits\HasFile;
use App\Traits\Scopes;

class Student extends Model
{
    use HasFactory, Notifiable, HasStatus, Scopes, HasFile;

    protected $fillable = [
        'name',
        'surname',
        'patronymic_name',
        'phone',
        'email',
        // file fields
        'image',
        'language_certificate',
        'red_passport',
        'green_pasport',
        'attestst',
        'diplom',
        'parents_pasport',
        'motivation_letter',
        'recamadition_letter',
        'parents_salary',
        'apostil',
        'dov',
        'insurance',
        'bank_account',
        'visa',
        'country_id',
        'program_id',
        'status',
        'enter_data_count',
        'user_id',
    ];

    public $fileFields = [
        'image',
        'language_certificate',
        'red_passport',
        'green_pasport',
        'attestst',
        'diplom',
        'parents_pasport',
        'motivation_letter',
        'recamadition_letter',
        'parents_salary',
        'apostil',
        'dov',
        'insurance',
        'bank_account',
        'visa',
    ];

    public function country()
    {
        return $this->hasOne(Country::class, 'id', 'country_id');
    }

    public function program()
    {
        return $this->hasOne(Program::class, 'id', 'program_id');
    }

    public function getFullnameAttribute()
    {
        return implode(' ', [$this->surname, $this->name, $this->patronymic_name]);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
