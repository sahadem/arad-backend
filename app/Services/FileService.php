<?php


namespace App\Services;

class FileService
{
    public function upload($params)
    {
        if ($params->hasFile('file')) {

            $file = $params->file('file');
            $filename = $file->getClientOriginalName();
            $path = public_path() . '/uploads/';
            return $file->move($path, $filename);
        }
    }
}
