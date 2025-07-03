<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use App\Enums\General\StatusStringEnum;
use App\Models\General\Reference;
use Laravel\Sanctum\HasApiTokens;
use App\Enums\RoleCodeEnum;
use App\Models\User\Role;
use App\Traits\HasStatus;
use App\Traits\HasFile;
use App\Traits\Scopes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, Scopes, HasFile, SoftDeletes;

    protected $fillable = [
        'username',
        'email',
        'name',
        'surname',
        'patronymic',
        'image',
        'password',
        'phone',
        'birthdate',
        'expiration_date',
        'issue_date',
        'passport',
        'pinfl',
        'region_id',
        'role_id',
        'registered_by',
        'one_id',
        'e_imzo',
        'notification',
        'status',
        'verify_expires_at',
        'verify_code',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public $fileFields = [
        'image'
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function region()
    {
        return $this->belongsTo(Reference::class, 'region_id')
            ->where('table_name', 'regions');
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public function getFullnameAttribute()
    {
        return implode(' ', [$this->surname, $this->name, $this->patronymic]);
    }

    public function getIsAdminAttribute()
    {
        $role = $this->role()->first()?->code;
        if ($role && in_array($role, [RoleCodeEnum::SUPER_ADMIN->value])) {
            return true;
        }
        return false;
    }

    public function getIsActiveAttribute()
    {
        return $this->status == StatusStringEnum::ACTIVE->value;
    }

}
