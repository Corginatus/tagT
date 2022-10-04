<?php

namespace App\Http\Controllers;

use App\Http\Services\UploadFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uploader = new UploadFile();
            $path = $uploader->uploadFile($image);

            return response(['data' => $path->path]);
        }

        return response();
    }
}
