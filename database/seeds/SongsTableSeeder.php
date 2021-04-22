<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 

        	DB::table('songs')->insert([
	            'user_id' => $faker->numberBetween($min = 1, $max = 10),
	            'title' => $faker->word,
	            'artist' => $faker->name,
	            'lyrics' => $faker->text($maxNbChars = 500),
	        ]);

        }
    }
}
