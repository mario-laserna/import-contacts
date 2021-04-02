<?php

namespace App\Jobs;

use App\Imports\ContactsImport;
use App\Models\contact\Contact;
use App\Models\file\File;
use App\Services\FileService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class ProcessCsvFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $file;
    private $userId;

    /**
     * Create a new job instance.
     *
     * @param File $file
     * @param $userId
     */
    public function __construct(File $file, $userId)
    {
        $this->file = $file;
        $this->userId = $userId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $id = $this->file->id;
        Log::debug("Job file $id");

        //actualiza status del archivo
        $this->file->status = File::STATUS_PROCESANDO;
        $this->file->save();

        Excel::import(new ContactsImport($this->userId), Storage::path($this->file->path));

        //actualiza status del archivo
        $this->file->status = File::STATUS_TERMINADO;
        $this->file->save();
    }
}
