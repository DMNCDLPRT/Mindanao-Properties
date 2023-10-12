<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Property;
use Illuminate\Support\Facades\Storage;

class DownloadPDFController extends Controller
{
    public function downloadPDF($id)
    {
        // Note: this fucntion can only download one file 
        // if user uploads multiple docs it will return an error

        $data = Property::with([
            'multimediaAssets.documents',
        ])->where('id', $id)->first();

        if (!$data) {
            abort(404);
        }

        $documents = $data->multimediaAssets->documents;

        foreach ($documents as $docs) {
            $d = $docs->docs_file_name;

            $cleanedPath = explode('","', substr($d, 2, -2));
            // dd($cleanedPath);
            $docsPath = str_replace('/', '', $cleanedPath);
            // $docsPath = $docs->docs_file_name; 
            $docsPathString = implode('', $docsPath);
        }

        // Extracting path and file name
        $pathParts = pathinfo($docsPathString);
        $path = $pathParts['dirname']; // uploads\properties\c942d9f7-dee4-4426-a223-3e79353c77d5
        $fileName = $pathParts['basename']; // docs1697070057-hmQoN1v9-Draft - CV  (2).pdf

        $publicPath = public_path();
        $filePath = "{$publicPath}\\storage\\{$path}\\{$fileName}";

        // Check if the file exists
        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            abort(404); // Handle if the file is not found
        }
    }
}
