<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $imgArray = [
        'beach.jpg',
        'one_or_zero.jpg',
        'misdirection.jpg',
        'pool_leak.jpg',
        'the_grid.jpg'
    ];
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph,
        'user_id' => mt_rand(1, 5),
        'image' => $imgArray[mt_rand(0, 4)]
    ];
});

$factory->define(App\Comment::class, function(Faker\Generator $faker) {
    return [
        'post_id' => mt_rand(1, 5),
        'name' => $faker->name,
        'email' => $faker->email,
        'comment' => $faker->paragraph
    ];
});

$factory->define(App\Tag::class, function(Faker\Generator $faker) {
    return [
      'name' => $faker->word,
    ];
});