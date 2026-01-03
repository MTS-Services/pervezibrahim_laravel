<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([
            [
                'thumbnail_one' => 'https://placehold.co/600x400',
                'file_one' => 'https://www.youtube.com/watch?v=9bZkp7q19f0',
                'thumbnail_two' => 'https://placehold.co/600x400',
                'file_two' => 'https://www.youtube.com/watch?v=9bZkp7q19f0',
                'description' => 'This is the about us description.',
            ]
        ]);
    }
}
