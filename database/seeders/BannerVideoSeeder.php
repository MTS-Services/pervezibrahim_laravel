<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('banner_videos')->insert([
            [
                'thumbnail' => 'https://placehold.co/600x400',
                'file' => 'https://www.youtube.com/watch?v=9bZkp7q19f0',
                'title' => 'Business Process Management System and Methods for the New Era of Technology.',
                'action' => 'http://localhost:8000/',
            ]
        ]);
    }
}
