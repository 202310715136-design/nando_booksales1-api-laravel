<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['judul' => 'Laskar Pelangi', 'author_id' => 1],
            ['judul' => 'Bumi', 'author_id' => 2],
            ['judul' => 'Bumi Manusia', 'author_id' => 3],
            ['judul' => 'Kambing Jantan', 'author_id' => 4],
            ['judul' => 'Ayat Ayat Cinta', 'author_id' => 5],
        ]);
    }
}