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

        DB::table('users')->delete();

        DB::table('users')
            ->insert([
                [
                    'surname'       => 'Nurullayev',
                    'name'          => 'Jalolbek',
                    'patronymic'    => '',
                    'username'      => 'nurullayev',
                    'email'=> 'nurullayevjalolbek28@gmail.com',
                    'password'      => Hash::make('@JALOL200419762003'),
                    'role_id'       => $admin->id,
                    'phone'         => '+998937381028',
                    'pinfl'         => '',
                    'status'        => 'active',
                ]
            ]);

    }
}
