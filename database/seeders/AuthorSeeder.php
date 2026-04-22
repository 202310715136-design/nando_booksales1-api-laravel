<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::insert([
            ['nama' => 'Andrea Hirata', 'email' => 'andrea@gmail.com'],
            ['nama' => 'Tere Liye', 'email' => 'tere@gmail.com'],
            ['nama' => 'Pramoedya', 'email' => 'pram@gmail.com'],
            ['nama' => 'Raditya Dika', 'email' => 'radit@gmail.com'],
            ['nama' => 'Habiburrahman', 'email' => 'habib@gmail.com'],
        ]);
    }
}