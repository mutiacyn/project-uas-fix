<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // =====================
        // BUAT ROLES
        // =====================
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $roleStaff = Role::firstOrCreate(['name' => 'staff']);
        $roleGuest = Role::firstOrCreate(['name' => 'guest']);

        // =====================
        // ADMIN DEFAULT
        // =====================
        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password'),
            ]
        );

        // Pastikan admin cuma punya role admin
        $admin->syncRoles([$roleAdmin]);
    }
}
