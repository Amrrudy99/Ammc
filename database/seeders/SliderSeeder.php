<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    public function run()
    {
        $slider1 = Slider::create([
            'name' => 'Slider 1',
            'details' => 'This is the first slider details.',
            'published' => true,
        ]);

        // Attach an image to the first slider using Spatie Media Library
        $slider1->addMediaFromUrl( 'http://127.0.0.1:8000'. asset('frontend/img/4.png'))->toMediaCollection('image');
        
        // Add more Slider records with images as needed...
    }
}
