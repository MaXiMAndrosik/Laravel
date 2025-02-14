<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class FormBuilderTestController extends Controller {
    
    public function show(FormBuilder $formBuilder) {

        $form = $formBuilder->create('App\Forms\EmployeeForm', [
            'method' => 'POST',
            'url' => route('post-form'),
        ]);

        return view('show_form', compact('form'));

    }

}
