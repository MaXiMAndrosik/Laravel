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
}
