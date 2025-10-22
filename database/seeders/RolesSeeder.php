<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $leader = \App\Models\User::factory()->create([
            'name' => 'Leader',
            'email' => 'leader@bpkhtl15gorontalo.com',
            'password' => Hash::make('123adm!N')
        ]);
        $admin = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@bpkhtl15gorontalo.com',
            'password' => Hash::make('123adm!N')
        ]);

        $leaderRole = Role::create(['name' => 'leader']);
        $adminRole = Role::create(['name' => 'admin']);

        $leader->assignRole($leaderRole);
        $admin->assignRole($adminRole);
    }
}
