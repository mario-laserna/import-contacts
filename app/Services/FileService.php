<?php


namespace App\Services;


use App\Models\file\File;
use Illuminate\Support\Facades\Auth;

class FileService
{
    public function storeFile($path, $name){
        $new_file = File::create([
            'user_id' => Auth::id(),
            'name' => $name,
            'path' => $path,
            'status' => File::STATUS_EN_ESPERA
        ]);

        return $new_file;
    }
}
