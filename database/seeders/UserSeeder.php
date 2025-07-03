<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Enums\RoleCodeEnum;
use App\Models\User\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::where('code', RoleCodeEnum::SUPER_ADMIN->value)->first();
        $moderator = Role::where('code', RoleCodeEnum::MODERATOR->value)->first();

        DB::table('users')->truncate();

        DB::table('users')
            ->insert([
                [
                    'surname'       => 'Super',
                    'name'          => 'Admin',
                    'patronymic'    => '',
                    'username'      => 'admin',
                    'password'      => Hash::make('admin'),
                    'role_id'       => $admin->id,
                    'phone'         => '+998999999999',
                    'pinfl'         => '52509016300025',
                    'status'        => 'active',
                ],
                [
                    'surname'       => 'Turdimurodov',
                    'name'          => 'Bakhtishod',
                    'patronymic'    => "",
                    'username'      => 'mrbakhtishod',
                    'password'      => Hash::make('mrbakhtishod'),
                    'role_id'       => $admin->id,
                    'phone'         => '+998998856345',
                    'pinfl'         => '12341234123412',
                    'status'        => 'active',
                ],
                [
                    'surname'       => 'Moderator',
                    'name'          => 'Moderator',
                    'patronymic'    => '',
                    'username'      => 'moderator',
                    'password'      => Hash::make('moderator'),
                    'role_id'       => $moderator->id,
                    'phone'         => '+998998856345',
                    'pinfl'         => '12341234123412',
                    'status'        => 'active',
                ],
            ]);

        $id = DB::table('users')->orderBy('id', 'desc')->first()?->id;
        DB::statement('alter sequence users_id_seq restart with ' . ($id + 1));
    }
}
