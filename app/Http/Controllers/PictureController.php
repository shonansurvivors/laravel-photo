<?php

namespace App\Http\Controllers;

use App\Picture;
use App\Http\Requests\PictureRequest;

class PictureController extends Controller
{
    public function index()
    {
        // ダミーデータ
        $pictures = [
            (object) [
                'id' => 1,
                'filepath' => '1/1.png',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
            (object) [
                'id' => 2,
                'filepath' => '1/2.png',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
            (object) [
                'id' => 3,
                'filepath' => '1/3.png',
                'created_at' => now(),
                'user' => (object) [
                    'id' => 1,
                    'name' => 'ユーザー名1',
                ],
            ],
        ];

        return view('pictures.index', ['pictures' => $pictures]);
    }

    public function create()
    {
        return view('pictures.create');
    }

    public function store(PictureRequest $request)
    {
        $request->file('picture')->store('public');

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
