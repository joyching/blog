<?php

use App\Post;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Post::class, function (Faker $faker, $attributes = []) {
    return [
        'user_id' => $attributes['user_id'] ?? factory(App\User::class)->create()->id,
        'title' => $faker->sentence,
        'summary' => $faker->sentence,
        'body' => $faker->text,
    ];
});
