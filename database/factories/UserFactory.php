<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

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

        'name' => 'テスト' . $i,
                'email' => 'test' . $i . '@test.com',
                'phone_number' => $faker->phoneNumber,
                'sex' => rand(1,2),
                'birthday' => $rand_date,
                'profile_image' => Str::random(64),
                'admin_user' => rand(0,1),
                'brands_id' => rand(1,10),
                'email_verified_at' => $now,
                'remember_token' => Str::random(12),
                'password' => Hash::make('testtest'), // 全テストユーザー「testtest」でログイン可能
                'created_at' => $now,
                'updated_at' => $now,
    ];
});
