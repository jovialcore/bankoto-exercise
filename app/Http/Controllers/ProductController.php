<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //



    public  function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }




    public  function create()
    {

        $categories = Category::all();
        $tags = Tag::all();

        return view('product.create', compact('categories', 'tags'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'tag_id' => 'required|integer',
            'size' => 'required|integer',
            'weight' => 'required|string',
            'colour' => 'required'

        ]);
        $products = $request->all();
        $products['sku-id'] = Product::generateRandomValues();
        $product = Product::create($products);

        $product->tags()->attach([$request->tag_id]);

        if ($product) {

            return redirect()->route('product.show', $product->id)->with('success', 'Products saved successfully');
        }
        return redirect()->route('product.create')->with('error', 'Unable to saved products something mysterious happened');
    }



    public function show($id)
    {

        $product = Product::with(['tags', 'category'])->findOrFail($id);

        $views = $product->views;
        if ($product) {
            $product->views = $views++;
            $product->save();
        }
        return view('product.show', compact('product'));
    }
}
