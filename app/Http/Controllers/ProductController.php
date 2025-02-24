<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perPage = request()->input('per_page', 5); // Default 10
        $Products = Product::paginate($perPage);
        return view('product/All-Products',['products'=>$Products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product/Add-Products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

             $request->validate([
                'name' => 'required|string|max:255',
                'desc' => 'required|string',
                'quantity' => 'required|integer|min:1',
                'price' => 'required|numeric|min:0',
                'rate' => 'required|numeric|min:0|max:5',
            ]);
    
            Product::create($request->all());

            return redirect()->route('get-All-Products')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
