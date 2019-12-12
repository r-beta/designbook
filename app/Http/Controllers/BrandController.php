<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

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
        //
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
