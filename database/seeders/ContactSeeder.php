<?php

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        Contact::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone_number' => '123-456-7890',
            'subject' => 'Hello',
            'message' => 'This is a sample message.',
        ]);

        // Add more Contact records as needed...
        // Contact::create([
        //     'name' => 'John Doe',
        //     'email' => 'john@example.com',
        //     'phone_number' => '123-456-7890',
        //     'subject' => 'Hello',
        //     'message' => 'This is a sample message.',
        // ]);

                
    }
}
