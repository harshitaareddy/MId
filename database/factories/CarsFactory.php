<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make'=>$faker->randomelement($array=array('honda','toyota','ford')),
        'Model'=>$faker->address,
        'Year'=>$faker->year,
    ];

});
