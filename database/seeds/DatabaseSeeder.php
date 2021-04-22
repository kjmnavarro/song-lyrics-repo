<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 10; $i++) { 

        	DB::table('users')->insert([
	            'username' => $faker->userName,
	            'email' => $faker->email,
	            'password' => Hash::make('password'),
	        ]);
	        
        }
    }
}
