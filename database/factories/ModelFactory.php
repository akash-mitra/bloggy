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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'type' => 'Registered',
        'slug' => uniqid (mt_rand(), true),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'created_at' => $faker->dateTime(),
    ];
});


$factory->define(App\Category::class, function (Faker\Generator $faker) {
    $name = $faker->colorName;
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'description' => $faker->paragraph(1, true),
    ];
});


$factory->define(App\Page::class, function (Faker\Generator $faker) {

    $para1 = $faker->paragraph(5, true);
    $para2 = $faker->paragraph(6, true);
    $para3 = $faker->paragraph(3, true);
    $head1 = $faker->sentence();
    $head2 = $faker->sentence();
    return [
        'title' => $faker->sentence,
        'intro' => $faker->paragraph,
        'markdown' => $para1 . "\n### " . $head1 . "\n" . $para2 . "\n### " . $head2 . "\n". $para3,
        'markup' => '<p>' . $para1 . '</p><h3>' . $head1 . '</h3><p>' . $para2 . '</p><h3>'. $head2 . '</h3><p>'. $para3 . '</p>',
        'publish' => '1',
    ];
});
