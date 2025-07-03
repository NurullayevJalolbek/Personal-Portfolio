<?php

namespace App\Models\User;

use App\Enums\RoleCodeEnum;
use App\Enums\RoleGroupEnum;
use App\Traits\HasStatus;
use App\Traits\HasTranslations;
use App\Traits\Scopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Role extends Model
{
    use HasFactory, Scopes, HasStatus, Sortable, HasTranslations;

    protected $fillable = [
        'name',
        'code',
        'group',
        'status',
    ];

    public $translatable = [
        'name'
    ];

    public function user_roles()
    {
        return $this->hasMany(UserRole::class);
    }

    public function scopeUser($query)
    {
        $query->where('code', RoleCodeEnum::USER->value);
    }

    public function scopeUserGroup($query)
    {
        $query->where('group', RoleGroupEnum::USER->value);
    }

    public function scopeAdminGroup($query)
    {
        $query->where('group', RoleGroupEnum::ADMIN->value);
    }
}
