<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Http\Requests\PhotoRequest;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Picture::all()->sortByDesc('created_at');

        return view('photos.index', ['photos' => $photos]);
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(PhotoRequest $request, Picture $picture)
    {
        $path = $request->file('photo')->store('images', config('filesystems.default'));
        $picture->filepath = $path;
        $picture->user_id = 1;
        $picture->save();

        return redirect()->route('photos.index');
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
