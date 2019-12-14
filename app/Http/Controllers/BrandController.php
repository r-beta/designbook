<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Http\Requests\StoreImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(5);
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        $prefs = config('pref');
        return view('brands.create', compact('prefs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
     
        // $message->session()->put('status', '成功');
        // return view('brands.index', $request);

        // return redirect()->route('brands.index')
        //                   ->with('success','ブランドを作成しました');

        $path = Storage::disk('s3')->put('images/originals', $request->logo_image);
        $request->merge([
            'logo_image' => $path
        ]);
        Brand::create($request->only('name', 'url', 'postal_code', 'prefecture', 'address',
                                             'address_url', 'email', 'phone_number', 'logo_image'));
        return back()->with('success', 'Image Successfully Saved');
    }

    public function show($id)
    {
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
