<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();

        $users = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@realshed.test',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'status' => 'active'
            ],
            [
                'name' => 'Agent',
                'username' => 'agent',
                'email' => 'agent@realshed.test',
                'password' => Hash::make('password'),
                'role' => 'agent',
                'status' => 'active'
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'email' => 'user@realshed.test',
                'password' => Hash::make('password'),
                'role' => 'user',
                'status' => 'active'
            ]
        ];

        // DB::table('users')->insert($users);
        // created_at & updated_at timestamps not added with insert method.
        // User create method to add the timestamps
        foreach ($users as $user) {
            User::create($user);
        };

        User::factory(10)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
