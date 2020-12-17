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
            'name' => 'Sid', 
            'age'=> 11, 
            'bio'=> 'Looking for someone to take things slow with. Enjoy lazy mornings and hanging out', 
            'species' => 'Sloth', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/public/assets/sloth.jpg'],

            ['id' => 2,
            'name' => 'Cassidy', 
            'age'=> 4, 
            'bio'=> 'howdy! looking to wrangle me a partner, yee-haw!. Some cowboys have too much tumbleweed in their blood to settle down.', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/public/assets/cat-cowboy.jpg'],

            ['id' => 3,
            'name' => 'Roo', 
            'age'=> 25, 
            'bio'=> 'Enjoy keeping fit and healthy. Ideal holiday laying in the sun. Looking for the right sheila in the land down under', 
            'species' => 'Kangaroo', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/public/assets/roo-posing.jpg'],

            ['id' => 4,
            'name' => 'Robin', 
            'age'=> 3, 
            'bio'=> 'If you love roleplay I\'m your Robin. Looking for my Lady Marian', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/public/assets/dog-robinhood.jpg'],

            ['id' => 5,
            'name' => 'Purrito', 
            'age'=> 8, 
            'bio'=> 'Looking for my purrrrrfect partner. Enjoy lazer pens, string. Dislike humans!', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/public/assets/cat-selfie.jpg'],

            ['id' => 6,
            'name' => 'Shanti', 
            'age'=> 5, 
            'bio'=> 'Looking to find the yin to my yang. Enjoy short walks, yoga, and being mindful.', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/public/assets/yoga-dog.jpg'],

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
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 11,
            'name' => 'Sid', 
            'age'=> 11, 
            'bio'=> 'Looking for someone to take things slow with. Enjoy lazy mornings and hanging out', 
            'species' => 'Sloth', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/sloth.jpg'],

            ['id' => 12,
            'name' => 'Cassidy', 
            'age'=> 4, 
            'bio'=> 'howdy! looking to wrangle me a partner, yee-haw!. Some cowboys have too much tumbleweed in their blood to settle down.', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/cat-cowboy.jpg'],

            ['id' => 13,
            'name' => 'Roo', 
            'age'=> 25, 
            'bio'=> 'Enjoy keeping fit and healthy. Ideal holiday laying in the sun. Looking for the right sheila in the land down under', 
            'species' => 'Kangaroo', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/roo-posing.jpg'],

            ['id' => 14,
            'name' => 'Robin', 
            'age'=> 3, 
            'bio'=> 'If you love roleplay I\'m your Robin. Looking for my Lady Marian', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/dog-robinhood.jpg'],

            ['id' => 15,
            'name' => 'Purrito', 
            'age'=> 8, 
            'bio'=> 'Looking for my purrrrrfect partner. Enjoy lazer pens, string. Dislike humans!', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/cat-selfie.jpg'],

            ['id' => 16,
            'name' => 'Shanti', 
            'age'=> 5, 
            'bio'=> 'Looking to find the yin to my yang. Enjoy short walks, yoga, and being mindful.', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/yoga-dog.jpg'],

            ['id' => 17,
            'name' => 'SmoothBad', 
            'age'=> 15, 
            'bio'=> 'Love carrots and watching the tv', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 18,
            'name' => 'Pauline', 
            'age'=> 12, 
            'bio'=> 'I love black and white films', 
            'species' => 'Porpoise', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 19,
            'name' => 'Seb', 
            'age'=> 29, 
            'bio'=> 'I like fingerpainting and am quite shy', 
            'species' => 'Gorilla', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 20,
            'name' => 'Ellie', 
            'age'=> 42, 
            'bio'=> 'I rarely forget', 
            'species' => 'Elephant', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/public/assets/rhino.jpg']

        ]);
  
    }
}
