<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function index(){

        return view('upload');
        
    }

    public function upload(Request $request) {

        $number = $request->cookie('number_of_uploads');

        if ($number > 2) {
            return response('Too many uploads ' . $number, 200);
        }

        $name = $request->input('file-name') ? : 0;

        $file = $request->file('uploaded_file');

        $tempPath = $file->getRealPath();

        $newfileName = $name . '.' . $file->getClientOriginalExtension();

        $file->move('./uploads', $newfileName);

        $number++;

        return response($request->header('host') . '/public/uploads/' . $newfileName)->cookie('number_of_uploads', $number);

        // echo $request->header('host') . '/public/uploads/' . $newfileName;

        // echo '<pre>';
        // var_dump($request->header());
        
    }

    public function showForm() {

        return view('upload-form');

    }

    public function fileUpload(Request $request) {

        if ($request->hasFile('uploaded_file')) {
            $file = $request->file('uploaded_file');
            echo $file->path() . '<br>';
            echo $file->getClientOriginalName() . '<br>';
            echo $file->getClientOriginalExtension() . '<br>';
            $file->storeAs('images', $file->getClientOriginalName());
        } else {
            echo 'No file uploaded';
        }
        if ($request->hasFile('uploaded_files')) {
            foreach ($request->uploaded_files as $uploaded) {
                var_dump($uploaded);
            }
        }



        
    }

}
