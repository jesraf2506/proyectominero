<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Equipo::class, function (Faker $faker) {
    
    /*
    $listado = array();
    $i=0;
    for ($i = 1; $i <= 200; $i++) {
        $listado[i]=i;
    }
    */
    return [

        'brand'=> $faker->sentence(4),
        'model' => $faker->sentence(1),
        'horometer' => rand(2000,10000),
        'fl' => $faker->sentence(5),
        'bl' => $faker->sentence(5),
        //'state_id' => $faker->unique()->randomElement([1, 2, 3,4]),
        //'state_id' => $faker->unique()->rand(1,4),
        //'user_id' => $faker->unique()->rand(1,200),
        //'state_id' => $faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10]),
    ];
});
