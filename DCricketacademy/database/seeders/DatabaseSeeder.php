<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        File::create([
            'name' => 'Sample Video',
            'file_path' => 'sample_video.mp4',
            'description' => 'This is a sample video description.'
        ]);
    }
}
