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

$factory->define(App\Organisation::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company
    ];
});

$factory->define(App\Department::class, function (Faker\Generator $faker) {
	return [];
});

$factory->define(App\CourseCategory::class, function(Faker\Generator $faker) {
	return[
		'name' => $faker->unique()->randomElement(['Design', 'Development', 'Business' ,'Education','IT'])
	];
});

$factory->define(App\Course::class, function(Faker\Generator $faker) {
	return[];
});

$factory->define(App\Track::class, function(Faker\Generator $faker) {
	return[
		'name' => $faker->unique()->randomElement(['Developer Track', 'Manager Track','Mandatory Track', 'Designer Track'])
	];
});

$factory->define(App\Enrollment::class, function(Faker\Generator $faker) {
	return[];
});

