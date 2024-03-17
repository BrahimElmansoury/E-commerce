<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::query()->paginate(1);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product=new Product();
        return view('product.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $formFields=$request->validated();
        if($request->hasFile('image'))
        {
            $formFields['image'] = $request->file('image')->store('product','public');
        }
        Product::create($formFields);
        return to_route('products.index')->with('success',"Product created successfully");
    }

  
    public function indexAdmin()
    {
        return view('admin.indexAdmin');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.edite', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'pname' => 'required|string',
            'price' => 'required|numeric',
            'sdesc' => 'required|string',
            'category' => 'required|numeric',
            'quantite' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product->name = $validatedData['pname'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['sdesc'];
        $product->category_id= $validatedData['category']; // Utilisez la colonne "category_id"
        $product->quantity = $validatedData['quantite'];
        $product->image = $validatedData['image'];
    
        // Enregistrez le produit
       
    
        $product->update($validatedData);

        return redirect()->route('admin.product')->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('admin.product')->with('success', 'Product deleted successfully');
}
}
