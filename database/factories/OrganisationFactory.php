<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Organisation::class, function (Faker $faker) {
    $name = $faker->company;
    return [
        'name'       => $name,
        'slug'       => Str::slug($name),
        'created_at' => now(),
    ];
});
