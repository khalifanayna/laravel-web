<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class CreateFirstUser extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email'=> 'gatotpcr.ac.id',
            'password' => Hash::make('gatotkaca')
        ]);
    }
}
