<?php

use Illuminate\Database\Seeder;
use App\Models\AboutUs;
use Illuminate\Support\Facades\Storage;

class AboutUsSeeder extends Seeder
{
    public function run()
    {   
        //Create about us model   
        $aboutUs = AboutUs::create([
            'site_name' => 'Your Site Name',
            'name' => 'Your Name',
            'president_description' => 'President Description',
            'link' => 'https://yourwebsite.com',
            'description' => 'About Us Description',
            'address' => '123 Street, City',
            'phone_number' => '123-456-7890',
            'email' => 'contact@yourwebsite.com',
            'author_seo' => 'Author SEO Name',
            'sitemap_link_seo' => 'https://yourwebsite.com/sitemap',
            'keywords_seo' => 'keyword1, keyword2, keyword3',
            'description_seo' => 'SEO Description',
            'location' => 'Latitude, Longitude',
        ]);
                                                                                // replace the image with the image url beloww xD
        // Add media to the AboutUs entry 
        $aboutUs->addMediaFromUrl('https://example.com/path/to/aboutus_image.jpg')
            ->toMediaCollection('aboutus_image');

        // Add gallery media to the AboutUs entry
        $galleryUrls = [
            'https://example.com/path/to/gallery_image_1.jpg',
            'https://example.com/path/to/gallery_image_2.jpg',
            // ... add more URLs ...
        ];
        //  loop to add the data to media  collection table 
        foreach ($galleryUrls as $galleryUrl) {
            $aboutUs->addMediaFromUrl($galleryUrl)
                ->toMediaCollection('gallery');
        }
    }
}
