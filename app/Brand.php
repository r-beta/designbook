<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Brand extends Model
{
    // usersテーブルとの1対多結合
    public function users()
    {
        return $this->hasMany('\App\User');
    }

    // 都道府県のアクセサー
    public function getPrefectureNameAttribute()
    {
        return config('pref.'.$this->prefecture);
    }
}
