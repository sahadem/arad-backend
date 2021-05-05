<?php


namespace App\Http\Controllers;

use App\Services\FileService;
use Illuminate\Http\Request;

class FileController
{
    public function upload(Request $request, FileService $fileService)
    {
        return $fileService->upload($request);
    }


    public function getUserFiles(Request $request)
    {

    }
}
