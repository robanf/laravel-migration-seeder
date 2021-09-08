<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        for($i=0;$i<10;$i++){
            $newViaggi= new Trip();
            $newViaggi->title = 'Viaggio numero'. rand(1,100);
            $newViaggi->location = 'Citta'. rand(1,100);
            $newViaggi->description = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat';
            $newViaggi->price =  rand(100,10000)/100;
            
            $newViaggi->save();
        }
    }
}
