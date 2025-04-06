<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Listing::Create([
            'title'=>'title1',
            'tags'=>'tags',
            'company'=>'company',
            'location'=>'location',
            'email'=>'mail@company.com',
            'website'=>'website',
            'description'=>'description'
        ]);
        Listing::Create([
            'title'=>'title2',
            'tags'=>'tags',
            'company'=>'company',
            'location'=>'location',
            'email'=>'mail@company.com',
            'website'=>'website',
            'description'=>'description'
        ]);
        Listing::Create([
            'title'=>'title3',
            'tags'=>'tags',
            'company'=>'company',
            'location'=>'location',
            'email'=>'mail@company.com',
            'website'=>'website',
            'description'=>'description'
        ]);


    }
}
