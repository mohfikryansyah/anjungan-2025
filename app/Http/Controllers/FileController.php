<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function showPdf($folder, $filename){
        $path_request = $folder . '/' . $filename;
        $path = Storage::get('public/'.$path_request);
        return Response::make($path, 200, [
           'Content-Type' => 'application/pdf',
           'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
