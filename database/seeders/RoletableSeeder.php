<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoletableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolesList = [
            [
                'role' => 'SuperAdmin',
                'level' => 1,
            ],
            [
                'role' => 'Supervisor',
                'level' => 2,
            ],
            [
                'role' => 'Moderator',
                'level' => 3,
            ],
            [
                'role' => 'Admin',
                'level' => 4,
            ],
            [
                'role' => 'Editor',
                'level' => 5,
            ],
            [
                'role' => 'User',
                'level' => 6,
            ],
        ];
        foreach ($rolesList as $role) {
            $newRole = new Role();
            $newRole->role = $role['role'];
            $newRole->level = $role['level'];
            $newRole->save();
        }
    }
}
