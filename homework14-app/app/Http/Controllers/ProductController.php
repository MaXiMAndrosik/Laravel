<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class ProductController extends Controller
{
    public function index()
    {
        // return Product::paginate(15);
        return view('voyager::profile');
    }
}
