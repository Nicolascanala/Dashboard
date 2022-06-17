<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    public function show(File $file)
    {
        return view('pages.admin.show', ['file' => $file]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
        $file = new File();
        $file->title = $request->title;
        $file->addMediaFromRequest('file')->toMediaCollection('file');
        $file->save();

        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        $file->update($request->validated());
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $file->delete();
        
        return $this->getAllFiles();
    }

    protected function getAllFiles()
    {
        $files = File::all();
        for ($i=0; $i < count($files); $i++) { 
            $file = $files[$i];
            $file->media = $file->getMedia('file')->first();
        }

        return $files;
    }
}
