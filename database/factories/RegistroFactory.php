<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Registro::class, function (Faker $faker) {
    return [
        
        'name' => $faker->sentence(2),
        'rut'=> rand(1000000,10000000),
        'failure' => $faker->text(50),
        'cause' => $faker->text(70),
        'solution' => $faker->text(100),
        'equipment_id'=> rand(1,50),
        'user_id'=> rand(1,50),
        
        
    ];
});
