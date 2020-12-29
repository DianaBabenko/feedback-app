<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Creating user role and manager role
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::query()->create(['name' => 'user']);
        Role::query()->create(['name' => 'manager']);
    }
}
