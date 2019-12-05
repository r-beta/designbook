<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// このファイルは使用されていない

use App\User;
use Faker\Generator as Faker;
use Carbon\Carbon;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    $now = Carbon::now();
    $faker = Faker::create('ja_JP');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
