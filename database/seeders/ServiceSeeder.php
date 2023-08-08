<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // service 1 
        $service1 = Service::create([
            'name' => 'Service 1',
            'description' => 'This is the first service description.',
        ]);

        // Attach an image to the first service using Spatie Media Library
        $service1->addMediaFromUrl( 'http://127.0.0.1:8000'. asset('frontend/img/4.png'))->toMediaCollection('image');


        // service 2 
        $service2 = Service::create([
            'name' => 'Service 2',
            'description' => 'This is the second service description.',
        ]);

        // Attach an image to the second service using Spatie Media Library
        $service2->addMediaFromUrl( 'http://127.0.0.1:8000'. asset('frontend/img/4.png'))->toMediaCollection('image');

        // Service 3
        $service3 = Service::create([
            'name' => 'Service 3',
            'description' => 'This is the second service description.',
        ]);

        // Attach an image to the second service using Spatie Media Library
        $service3->addMediaFromUrl( 'http://127.0.0.1:8000'. asset('frontend/img/4.png'))->toMediaCollection('image');

        // Service 4
        $service4 = Service::create([
            'name' => 'Service 4',
            'description' => 'This is the second service description.',
        ]);

        // Attach an image to the second service using Spatie Media Library
        $service4->addMediaFromUrl( 'http://127.0.0.1:8000'. asset('frontend/img/4.png'))->toMediaCollection('image');
        

        // Add more Service records with images as needed...
    }
}
