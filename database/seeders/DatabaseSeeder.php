<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
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
         //\App\Models\User::factory(5)->create();

         $user = User::factory()->create([
          'name' => 'John Doe',
          'email' => 'john@gmail.com'
         ]);

         Listing::factory(6)->create([
          'user_id' => $user->id
         ]);

         //Listing::create([ 
           // 'title' => 'My first blog',
            //'tags' => 'travel',
            //'city'=> 'Paris',
            //'country' => 'France',
            //'season' => 'summer',
            //'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            // sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            // quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            //  dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            // Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        // ]);
         //Listing::create([
            //'title' => 'My first blog',
            //'tags' => 'travel',
            //'city'=> 'Paris',
            //'country' => 'France',
            //'season' => 'summer',
            //'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,
             //sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
             //quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
              //dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            //Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
         //]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
