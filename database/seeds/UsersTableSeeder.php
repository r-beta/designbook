<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $faker = Faker::create('ja_JP');
        for ($i = 1; $i <= 10; $i++ ){
            $int= mt_rand(315586800,946652400);
            $rand_date = date("Y-m-d",$int);
            $users = [
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
            DB::table('users')->insert([$users]);
        };
    }
}
