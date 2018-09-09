<?php

use Illuminate\Database\Seeder;
use App\bookmark2;

class Bookmarks2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fejker = Faker\Factory::create();
        
        for($i=0; $i<100; $i++)
        {
            bookmark2::create([
                'name'  => $fejker->word,
                'url' => $fejker->url,
                'description' => $fejker->paragraph,
            ]);
        }
    }
}
