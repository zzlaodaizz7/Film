<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        //
        $data = Category::all();
        return view('backend.categories.index',compact(['data']));
    }

    public function create()
    {
        //
        return view('backend.categories.store');
    }

    public function store(Request $request)
    {
        //
        Category::create([
            'name'  => $request->name
        ]);
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        //
        return $id;
    }

    public function edit($id)
    {
        //
        $data = Category::find($id);
        return view('backend.categories.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        //
        $data = Category::find($id)->update(['name'=>$request->name]);
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        //
        $a = Category::find($id);
        $a->delete();
        return redirect()->route('categories.index');
    }
}
