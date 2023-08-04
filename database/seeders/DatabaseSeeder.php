<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Sandhika Galih',
            'username' => 'Sandhika',
            'radio' => 'Sandhika',
            'email' => 'sandhikagalih@gmail.com',
            'password' => bcrypt('12345'),
            'phone' => '000000000000'
        ]);
        
        User::create([
            'name' => 'Doddy Ferdiansyah',
            'username' => 'Doddy',
            'radio' => 'Doddy',
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('12345'),
            'phone' => '000000000000'
        ]);
    }
}
