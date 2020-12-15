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
            ['name' => 'Fluffy', 
            'age'=> 6, 
            'bio'=> 'Fan of walks and bones', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => 'an-image'],

            ['name' => 'Bob', 
            'age'=> 9, 
            'bio'=> ' like hiding in boxes', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => 'an-image'],

            [ 'name' => 'Wilma', 
            'age'=> 12, 
            'bio'=> 'Love carpentry', 
            'species' => 'Woodpecker', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => 'an-image']

        ]);
  
    }
}
