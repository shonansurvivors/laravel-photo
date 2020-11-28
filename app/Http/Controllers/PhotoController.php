<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Http\Requests\PictureRequest;

class PhotoController extends Controller
{
    public function index()
    {
        $pictures = Picture::all()->sortByDesc('created_at');

        return view('pictures.index', ['pictures' => $pictures]);
    }

    public function create()
    {
        return view('pictures.create');
    }

    public function store(PictureRequest $request, Picture $picture)
    {
        $path = $request->file('picture')->store('images', config('filesystems.default'));
        $picture->filepath = $path;
        $picture->user_id = 1;
        $picture->save();

        return redirect()->route('pictures.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
