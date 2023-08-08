<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;
use Carbon\Carbon;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $news1 = News::create([
            'name' => 'Sample News 1',
            'description' => 'This is the first sample news article.',
            'date' => Carbon::now()->format(config('panel.date_format')),
            'view' => rand(0 , 100),
            'published' => false,
        ]);

        // Attach images to the first news article using Spatie Media Library
        $news1->addMediaFromUrl( 'http://127.0.0.1:8000'. asset('frontend/img/4.png'))->toMediaCollection('image');
        
        // Add more News records with images as needed...

        // $news2 = News::create([
        //     'name' => 'Sample News 2',
        //     'description' => 'This is the second sample news article.',
        //     'date' => Carbon::now(),
        //     'view' => 150,
        //     'published' => true,
        // ]);

        // // Attach images to the second news article using Spatie Media Library
        // $news2->addMediaFromUrl("http://example.com/path_to_your_image.jpg")->toMediaCollection('image');
    }
}



