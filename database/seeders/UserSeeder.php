<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'first_name' => 'Super',
            'surname' => 'Admin',
            'company_name' => 'Travel Port',
            'email' => 'super-admin@flynow.lk',
            'phone' => '0741234567',
            'password' => Hash::make('password'),
            'role' => 1
        ]);

        User::create([
            'id' => 2,
            'first_name' => 'Admin',
            'surname' => '',
            'company_name' => 'Travel Port',
            'email' => 'admin@flynow.lk',
            'phone' => '0741234568',
            'password' => Hash::make('password'),
            'role' => 2
        ]);

        User::create([
            'id' => 3,
            'first_name' => 'Sub',
            'surname' => 'Agent',
            'company_name' => 'Travel Port',
            'email' => 'sub-agent@flynow.lk',
            'phone' => '0741234569',
            'password' => Hash::make('password'),
            'role' => 3
        ]);

        User::create([
            'id' => 4,
            'first_name' => 'User',
            'surname' => '',
            'company_name' => 'Travel Port',
            'email' => 'user@flynow.lk',
            'phone' => '0741234510',
            'password' => Hash::make('password'),
            'role' => 4
        ]);

        User::create([
            'id' => 5,
            'first_name' => 'Invalid',
            'surname' => 'User',
            'company_name' => 'Travel Port',
            'email' => 'invalid-user@flynow.lk',
            'phone' => '0741234511',
            'password' => Hash::make('password'),
            'role' => 0
        ]);
    }
}
