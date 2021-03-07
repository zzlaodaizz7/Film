<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nation;

class NationController extends Controller
{
    public function index()
    {
        //
        $data = Nation::all();
        return view('backend.nations.index',compact(['data']));
    }

    public function create()
    {
        //
        return view('backend.nations.store');
    }

    public function store(Request $request)
    {
        //
        Nation::create([
            'name'  => $request->name
        ]);
        return redirect()->route('nations.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $data = Nation::find($id);
        return view('backend.nations.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        //
        $data = Nation::find($id)->update(['name'=>$request->name]);
        return redirect()->route('nations.index');
    }

    public function destroy($id)
    {
        //
        $a = Nation::find($id);
        $a->delete();
        return redirect()->route('nations.index');
    }
}
