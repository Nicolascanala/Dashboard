<?php

namespace App\Http\Controllers;

use App\Models\File;

class AdminController extends Controller
{
    public function index()
    {
        $files = File::all();
        for ($i=0; $i < count($files); $i++) { 
            $file = $files[$i];
            $file->media = $file->getMedia('file')->first();
        }

        return view('pages.admin.index', ['files' => $files]);
    }
}
