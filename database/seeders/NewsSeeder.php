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
            'name' => 'شحوط السفينة العملاقة مسؤولية من ',
            'description' => 'ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع',
            'date' => Carbon::now()->format(config('panel.date_format')),
            'view' => rand(0 , 100),
            'published' => false,
        ]);

        // Attach images to the first news article using Spatie Media Library
        $news1->addMediaFromUrl( 'http://127.0.0.1:8000'. asset('frontend/img/news-thumbnail1.png'))->toMediaCollection('image');
        
        // Add more News records with images as needed...

        $news2 = News::create([
            'name' => 'التطوع .. يعزز روح التعاون والعطاء',
            'description' => 'ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع',
            'date' => Carbon::now()->format(config('panel.date_format')),
            'view' => rand(0 , 100),
            'published' => false,
        ]);

        // Attach images to the second news article using Spatie Media Library
        $news2->addMediaFromUrl('http://127.0.0.1:8000'. asset('frontend/img/news-thumbnail2.png'))->toMediaCollection('image');


        $news3 = News::create([
            'name' => 'مارلوج 10 .. توصيات تواجه التحديات في النقل البحري والموانئ',
            'description' => 'ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث ع',
            'date' => Carbon::now()->format(config('panel.date_format')),
            'view' => rand(0 , 100),
            'published' => false,
        ]);

        // Attach images to the second news article using Spatie Media Library
        $news3->addMediaFromUrl('http://127.0.0.1:8000'. asset('frontend/img/news-thumbnail3.png'))->toMediaCollection('image');
    }
}



