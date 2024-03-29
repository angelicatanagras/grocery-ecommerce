<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomDigitNotNull,
        'details' =>$faker->word,
        'product_type_id' => rand(1,3)
    ];
});
