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
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata ',
            'year' => 2005,
            'publisher' => 'Penerbit',
            'city' => 'Kota',
            'cover' => 'Cover.jpg',
            'bookshelf_id' => 1,
            'category_id' => 1,
        ]);
    }
}
