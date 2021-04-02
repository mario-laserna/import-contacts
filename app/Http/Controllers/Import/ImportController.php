<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use App\Http\Requests\Import\CsvFileRequest;
use App\Jobs\ProcessCsvFile;
use App\Services\FileService;
use Illuminate\Support\Facades\Auth;

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
        $filename = $request->file('csv_file')->getClientOriginalName();
        $new_file = $this->fileService->storeFile($file_path, $filename);

        //Se dispara job para procesamiento, validacion del archivo
        ProcessCsvFile::dispatch($new_file, Auth::id());

        $message = "El archivo será procesado";

        return view('import.import', [
            'message' => $message
        ]);
    }
}
