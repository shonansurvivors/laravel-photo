<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Http\Requests\PhotoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(Request $request)
    {
        $photos = Photo::all()->sortByDesc('created_at');

        if(isset($request->user_id)) {
            $photos = $photos->where('user_id', $request->user_id);
        }

        return view('photos.index', ['photos' => $photos]);
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(PhotoRequest $request, Photo $photo)
    {
        // $path = $request->file('photo')->store('images', [config('filesystems.default'), 'ACL' => 'public-read']);
        $path = Storage::putFile('images', $request->file('photo'), 'public');
        $photo->filepath = $path;
        $photo->title = $request->title;
        $photo->user_id = $request->user()->id;
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

    public function bookmark(Request $request, Photo $photo)
    {
        $photo->bookmarks()->detach($request->user()->id);
        $photo->bookmarks()->attach($request->user()->id);

        return redirect()->route('photos.show', ['photo' => $photo]);
    }

    public function unbookmark(Request $request, Photo $photo)
    {
        $photo->bookmarks()->detach($request->user()->id);

        return redirect()->route('photos.show', ['photo' => $photo]);
    }
}
