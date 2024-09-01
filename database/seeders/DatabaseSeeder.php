<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     
    public function run(): void
    {
        User::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listing::factory(10)->create();
       
        // Listing::create([
        //     'title'=>'Laravel senior Developer',
        //     'tags'=>'Laravel, javascripts',
        //     'company'=>'Safaricom',
        //     'location'=>'Nairobi,Kenya',
        //     'email'=>'hezronmuraya9@gmail.com',
        //     'website'=>'https://www.safaricom.com',
        //     'description'=>'Lorem ipsum dolor sit amet consectetur 
        //     adipisicing elit. Unde vero minima ut 
        //     cupiditate! Quibusdam, culpa nobis amet unde ab nihil et est laborum,
        //      ea quas non hic temporibus nulla facilis!',
        // ]);
        // Listing::create([
        //     'title'=>'Laravel senior Developer',
        //     'tags'=>'Laravel, javascripts',
        //     'company'=>'Safaricom',
        //     'location'=>'Nairobi,Kenya',
        //     'email'=>'hezronmuraya9@gmail.com',
        //     'website'=>'https://www.safaricom.com',
        //     'description'=>'Lorem ipsum dolor sit amet consectetur 
        //     adipisicing elit. Unde vero minima ut 
        //     cupiditate! Quibusdam, culpa nobis amet unde ab nihil et est laborum,
        //      ea quas non hic temporibus nulla facilis!',
        // ]);
    }
}
