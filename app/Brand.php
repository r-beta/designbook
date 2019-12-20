<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Brand extends Model
{
    protected $fillable = [
        'name', 'url', 'postal_code', 'prefecture', 'address', 'address_url', 'email', 'phone_number', 'logo_image',
    ];

    // usersテーブルとの1対多結合
    public function users()
    {
        return $this->hasMany('\App\User');
    }

    // 都道府県のアクセサー
    public function getPrefectureNameAttribute()
    {
        return config('pref.' . $this->prefecture);
    }

    // 都道府県のミューテタ(Controllerで制御できたので不要になった)
    // public function setPrefectureAttribute($value)
    // {
    //     $this->attributes['prefecture'] = strtolower($value);
    // }

    // S3のURL変換アクセサー
    public function getImageUrlAttribute()
    {
        return Storage::disk('s3')->url($this->logo_image);
    }
}
