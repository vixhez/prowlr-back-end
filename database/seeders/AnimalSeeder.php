<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;
use Illuminate\Support\Facades\DB;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            ['id' => 1,
            'name' => 'Fluffy', 
            'age'=> 6, 
            'bio'=> 'Fan of walks and bones', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 2,
            'name' => 'Bob', 
            'age'=> 9, 
            'bio'=> ' like hiding in boxes', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 3,
            'name' => 'Wilma', 
            'age'=> 12, 
            'bio'=> 'Love carpentry', 
            'species' => 'Woodpecker', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 4,
            'name' => 'Beth', 
            'age'=> 26, 
            'bio'=> 'I have a passion for digging', 
            'species' => 'Wombat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 5,
            'name' => 'Widget', 
            'age'=> 20, 
            'bio'=> 'Competitive swimmer', 
            'species' => 'Whale', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 6,
            'name' => 'Bear', 
            'age'=> 18, 
            'bio'=> 'Like hibernating during the winter months', 
            'species' => 'Bear', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 7,
            'name' => 'SmoothBad', 
            'age'=> 15, 
            'bio'=> 'Love carrots and watching the tv', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 8,
            'name' => 'Pauline', 
            'age'=> 12, 
            'bio'=> 'I love black and white films', 
            'species' => 'Porpoise', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 9,
            'name' => 'Seb', 
            'age'=> 29, 
            'bio'=> 'I like fingerpainting and am quite shy', 
            'species' => 'Gorilla', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 10,
            'name' => 'Ellie', 
            'age'=> 42, 
            'bio'=> 'I rarely forget', 
            'species' => 'Elephant', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg']

        ]);
  
    }
}
