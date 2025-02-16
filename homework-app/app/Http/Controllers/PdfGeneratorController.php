<?php

namespace App\Http\Controllers;

use App\Models\NewUser;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class PdfGeneratorController extends Controller {

    public function index($id) {

        $user = NewUser::where('id', $id)->first();

        $data = [
            'name' => $user['name'],
            'surname' => $user['surname'],
            'email' => $user['email']
        ];

        var_dump($data);

        $pdf = Pdf::loadView ('resume' , $data);
        return $pdf->stream('invoice.pdf');

    }

}
