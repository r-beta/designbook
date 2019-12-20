<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        // 5件ごとにペジネーション
        $brands = Brand::paginate(5);
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        // 都道府県の連想配列をconfigから持ってきて出力
        $prefs = config('pref');
        return view('brands.create', compact('prefs'));
    }

    public function confirm(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required',
            'url' => 'nullable | url',
            // 'postal_code' => 'required',
            'prefecture' => 'between:1,47',
            // 'address' => 'required',
            'address_url' => 'nullable | url',
            'email' => 'required | email',
            'phone_number' => 'required',
        ]);

        // 都道府県のIDをconfigでテキスト形式に変更
        $prefecture_name = config('pref.' . $request->prefecture);

        // S3に保存 & 文字列情報を追加
        $logo_image = Storage::disk('s3')->put('images/brands', $request->file);
        $request->merge([
            'logo_image' => $logo_image,
        ]);

        // 送信するデータを絞り込み
        $input = $request->only('name', 'url', 'postal_code', 'prefecture', 'address',
            'address_url', 'email', 'phone_number', 'logo_image');

        //入力内容確認ページのviewにデータを渡して表示
        return view('brands.confirm', compact('input', 'prefecture_name'));
    }

    public function store(Request $request)
    {
        // DBに保存
        Brand::create($request->only('name', 'url', 'postal_code', 'prefecture', 'address',
            'address_url', 'email', 'phone_number', 'logo_image'));

        return redirect()->route('brands.index')->with('success', 'ブランドを作成しました');
    }

    public function show($id)
    {
        // ブランドとユーザー情報を紐付ける
        $brand = Brand::findOrFail($id);
        $users = Brand::findOrFail($id)->users;
        return view('brands.show', compact('brand', 'users'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
