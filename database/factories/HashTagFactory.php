<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HashTag;
use Faker\Generator as Faker;

$factory->define(HashTag::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name
    ];
});
