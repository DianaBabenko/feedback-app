<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Creating default manager with role manager
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('role_user')->truncate();

        $managerRole = Role::query()->where('name', 'manager')->first();

        $manager = User::query()->create([
            'name'      => 'Manager',
            'email'     => 'manager@gmail.com',
            'password'  => Hash::make('password')
        ]);

        $manager->roles()->attach($managerRole);
    }
}
