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
            'bio'=> 'Looking for someone to take things slow with. Enjoy lazy mornings and hanging out.', 
            'species' => 'Sloth', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/sloth.jpg'],

            ['id' => 2,
            'name' => 'Cassidy', 
            'age'=> 4, 
            'bio'=> 'howdy! looking to wrangle me a partner, yee-haw!. Some cowboys have too much tumbleweed in their blood to settle down.', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/cat-cowboy.jpg'],

            ['id' => 3,
            'name' => 'Roo', 
            'age'=> 25, 
            'bio'=> 'Enjoy keeping fit and healthy. Ideal holiday laying in the sun. Looking for the right sheila in the land down under.', 
            'species' => 'Kangaroo', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/roo-posing.jpg'],

            ['id' => 4,
            'name' => 'Robin', 
            'age'=> 3, 
            'bio'=> 'If you love roleplay I\'m your Robin. Looking for my Lady Marian.', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/dog-robinhood.jpg'],

            ['id' => 5,
            'name' => 'Purrito', 
            'age'=> 8, 
            'bio'=> 'Looking for my purrrrrfect partner. Enjoy lazer pens, string. Dislike humans!', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/cat-selfie.jpg'],

            ['id' => 6,
            'name' => 'Shanti', 
            'age'=> 5, 
            'bio'=> 'Looking to find the yin to my yang. Enjoy short walks, yoga, and being mindful.', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/yoga-dog.jpg'],

            ['id' => 7,
            'name' => 'Wilma', 
            'age'=> 4, 
            'bio'=> 'Big on preening, old school disco and waxing my beak. Three time competitive quacking champion.', 
            'species' => 'Goose', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/goose.jpg'],

            ['id' => 8,
            'name' => 'Sergio', 
            'age'=> 14, 
            'bio'=> 'In need of a date for my bro\'s wedding. Also really wanna visit the Blue Lagoon in Reykjavik with a special someone. Fellow swimmer non-negotiable. Sensitive soul.', 
            'species' => 'Brown bear', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/bear.jpg'],

            ['id' => 9,
            'name' => 'Fizz', 
            'age'=> 2, 
            'bio'=> 'On here ironically, I guess? Unless you do wanna meet. But I will never share my peanuts with you.', 
            'species' => 'Mouse', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/mouse.jpg'],

            ['id' => 10,
            'name' => 'Gerald', 
            'age'=> 22, 
            'bio'=> 'I love french films, lebanese food and challenging conversations.', 
            'species' => 'Giraffe', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/giraffe.jpg'],

            ['id' => 11,
            'name' => 'Bob', 
            'age'=> 18, 
            'bio'=> 'Here for the lolz.', 
            'species' => 'Llama', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/hairyllama.jpg'],

            ['id' => 12,
            'name' => 'Herbert', 
            'age'=> 4, 
            'bio'=> 'I sometimes feel like I\'m just spinning in a wheel.', 
            'species' => 'Hamster', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/hammster.jpg'],

            ['id' => 13,
            'name' => 'Ronnie', 
            'age'=> 25, 
            'bio'=> 'All about the spa and ice cream sundaes. Former Olympic long-jumper.', 
            'species' => 'Rhino', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/rhino.jpg'],

            ['id' => 14,
            'name' => 'Yvonne', 
            'age'=> 33, 
            'bio'=> 'You\'ll find me knitting, or with my nose in a good book.', 
            'species' => 'Sheep', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/sheep.jpg'],

            ['id' => 15,
            'name' => 'Beatriz', 
            'age'=> 17, 
            'bio'=> 'Race car driver, looking for someone to spend life in the fast lane with.', 
            'species' => 'Llama', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/sunglassesLlama.jpg'],

            ['id' => 16,
            'name' => 'Wilma', 
            'age'=> 17, 
            'bio'=> 'Abstract fingerpainting is my thing, am really shy.', 
            'species' => 'Wombat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => '/assets/wombat.jpg'],

            ['id' => 17,
            'name' => 'Tony',
            'age'=> 6,
            'bio'=> 'I like long rides in the country, if you know what I mean. Hit me up!',
            'species' => 'Horse',
            'likes' => 0,
            'dislikes' => 0,
            'image_url' => '/assets/image.png'],

            ['id' => 18,
            'name' => 'Stan',
            'age'=> 10,
            'bio'=> 'DM me if you like a cheeky monkey, not looking for anything serious just here for some fun.',
            'species' => 'Monkey',
            'likes' => 0,
            'dislikes' => 0,
            'image_url' => '/assets/Monkey.jpg'],

            ['id' => 19,
            'name'=> 'Barry',
            'age'=> 7,
            'bio'=> 'I’m a foodie, big into my treats. You might want to call the paw-lice as I could steal your heart.',
            'species' => 'Dog',
            'likes' => 0,
            'dislikes' => 0,
            'image_url' => '/assets/Barry.png'],

            ['id' => 20,
            'name'=> 'Luke',
            'age'=> 4,
            'bio'=> 'I always think that anything is Paw-sible. Here for fun, if you are too serious then you are barking up the wrong tree.',
            'species' => 'Dog',
            'likes' => 0,
            'dislikes' => 0,
            'image_url' => '/assets/Luke.png']
           
        ]);
  
    }
}
