<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(RoleSeeder::class);
        

        User::factory()->create([
            'cui' => '1234567891012',
            'name' => 'Super Admin',
            'phone' => '11111111',
            'email' => 'root@admin.com',
            'password' => bcrypt('Pu3st0d3s@lud'),
        ])->assignRole('admin');
    
    }
}
