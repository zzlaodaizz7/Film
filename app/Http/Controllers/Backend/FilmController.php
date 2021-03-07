<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Nation;
use Illuminate\Http\Request;
use App\Film;
class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Film::all();
        return view('backend.films.index',compact(['data']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category   = Category::all();
        $nation       = Nation::all();
        return view('backend.films.store',compact('category','nation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Film::insert([
            'name'              => $request->name,
            'categorys_id'      => $request->categorys_id,
            'nations_id'        => $request->nations_id,
            'thumbnail'         => $request->thumbnail,
            'year'              => $request->year,
            'link'              => $request->link,
            'trailer'           => $request->trailer,
            'contentfilm'       => $request->contentfilm,
            'cast'              => $request->cast,
            'episodes'          => $request->episodes,
            'language'          => $request->language,
            'status'            => $request->status,
        ]);
        return redirect()->route('films.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = Film::find($id);
        return view('backend.films.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Film::find($id);
        $category   = Category::all();
        $nation       = Nation::all();
        return view('backend.films.edit',compact('data','category','nation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Film::find($id)->update([
            'name'              => $request->name,
            'categorys_id'      => $request->categorys_id,
            'nations_id'        => $request->nations_id,
            'thumbnail'         => $request->thumbnail,
            'year'              => $request->year,
            'link'              => $request->link,
            'trailer'           => $request->trailer,
            'contentfilm'       => $request->contentfilm,
            'cast'              => $request->cast,
            'episodes'          => $request->episodes,
            'language'          => $request->language,
            'status'            => $request->status,
        ]);
        return redirect()->route('films.index');
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
        $a = Film::find($id);
        $a->delete();
        return redirect()->route('films.index');
    }
}
