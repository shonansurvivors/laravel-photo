<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Http\Requests\PhotoRequest;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all()->sortByDesc('created_at');

        return view('photos.index', ['photos' => $photos]);
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(PhotoRequest $request, Photo $photo)
    {
        $path = $request->file('photo')->store('images', config('filesystems.default'));
        $photo->filepath = $path;
        $photo->user_id = 1;
        $photo->save();

        return redirect()->route('photos.index');
    }

    public function show(Photo $photo)
    {
        return view('photos.show', ['photo' => $photo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
