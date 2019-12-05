<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;
use Carbon\Carbon;
use Illuminate\Support\Str;

$factory->define(Brand::class, function (Faker $faker) {
    $now = Carbon::now();
    $faker = Faker::create('ja_JP');
    return [
        'name' => $faker->company,
        'url' => Str::random(24),
        'postal_code' => Str::random(8),
        'prefecture' => rand(1,47),
        'address' => $faker->address,
        'address_url' => Str::random(24),
        'email' => $faker->safeEmail,
        'phone_number' => $faker->phoneNumber,
        'logo_image' => Str::random(64),
        'created_at' => $now,
        'updated_at' => $now,
    ];
});
