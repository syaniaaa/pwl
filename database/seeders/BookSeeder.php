<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Contoh_Judul',
            'author' => 'Nama dari Author',
            'year' => 2023,
            'publisher' => 'nama dari publisher',
            'city' => 'kota',
            'cover' => 'book-cover.jpg',
            'quantity' => '3',
            'category_id' => 1,
            'bookshelf_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
