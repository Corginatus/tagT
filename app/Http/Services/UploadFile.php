<?php


namespace App\Http\Services;


use App\Models\Image;

class UploadFile
{
    public function uploadFile($file) {
        try {
            $filenameWithExt = $file->getClientOriginalName();
            // Get Filename
            $filename = sha1(pathinfo($filenameWithExt, PATHINFO_FILENAME));
            // Get just Extension
            $extension = $file->getClientOriginalExtension();
            // Filename To store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $file->storeAs('uploads', $fileNameToStore, 'public');

            $fileUpload = new Image;
            $fileUpload->path = '/storage/' . $path;
            $fileUpload->save();
            return $fileUpload;
        } catch (\Exception $e) {
            return null;
        }
    }
}
