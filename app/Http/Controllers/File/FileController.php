<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\file\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{

    public function index(){
        $files = File::where('user_id', Auth::id())
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('files.files_list', [
            'files' => $files
        ]);
    }
}
