<?php

namespace App\Http\Controllers;

use App\Models\m;
use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('media.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('media.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'category' => 'required|integer'
        ]);

        $saved = Media::create($request->all());

        if ($saved) {
            return redirect()->route('media.show', $saved->id)->with('success', 'Media saved successfully');
        }

        return redirect()->route('media.index')->with('error', 'Failed to create media. Something went wrong');
    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        $media = Media::findOrFail($media);

        return view('media.show', compact('media'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(m $m)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, m $m)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(m $m)
    {
        //
    }
}
