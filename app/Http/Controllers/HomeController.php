<?php

namespace App\Http\Controllers;

use App\Models\File;

class HomeController extends Controller
{
    public function index()
    {
        $files = File::all();
        for ($i=0; $i < count($files); $i++) { 
            $file = $files[$i];
            $file->media = $file->getMedia('file')->all();
        }

        return view('pages.home.index', ['files' => $files]);
    }
}
