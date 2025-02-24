<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return Product::paginate(15);
        // return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $product = Product::create([
            'sku' => $request->get('sku'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
        ]);
        $product->save();
        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $product = DB::connection('mysql')->table('products')->where('id', $id)->get();
        return response()->json($product, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        DB::connection('mysql')
            ->table('products')->where('id', $id)
            ->update([
                'sku' => $request->get('sku'),
                'name' => $request->get('name'),
                'price' => $request->get('price'),
        ]);
        return response()->json(DB::connection('mysql')->table('products')->where('id', $id)->get(), 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        DB::connection('mysql')->table('products')->where('id', $id)->delete();
        return response()->json([], 204);
    }
}
