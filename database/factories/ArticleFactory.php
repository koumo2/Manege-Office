<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'name' => $faker->name,
        'date'=> $faker->dateTime,
        'contents' => $faker->realText
    ];
});