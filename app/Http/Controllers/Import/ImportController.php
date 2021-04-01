<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Http\Requests\Import\CsvFileRequest;
use App\Services\FileService;

class ImportController extends Controller
{
    private $fileService;

    public function __construct(FileService $fs){
        $this->fileService = $fs;
    }

    public function index() {
        return view('import.import');
    }

    public function import(CsvFileRequest $request) {
        $file_path = $request->csv_file->store('file');
        $new_file = $this->fileService->storeFile($file_path);

        dd($new_file);
    }
}
