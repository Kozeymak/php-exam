<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administator = new Role();
        $administator->name = 'administator';
        $administator->save();

        $user = new Role();
        $user->name = 'user';
        $user->save();
    }
}
