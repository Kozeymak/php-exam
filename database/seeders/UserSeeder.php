<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administator = Role::where('name', 'administator')->value('id');
        $user = Role::where('name', 'user')->value('id');

        $user1 = new User();
        $user1->name = 'kozemyak';
        $user1->email = 'admin@admin.admin';
        $user1->password = Hash::make(123456);
        $user1->role_id = $administator;
        $user1->save();

        $user1 = new User();
        $user1->name = 'kozemyak2';
        $user1->email = 'admin2@admin.admin';
        $user1->password = Hash::make(123456);
        $user1->role_id = $user;
        $user1->save();
    }
}
