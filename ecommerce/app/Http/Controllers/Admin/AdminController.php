<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Stock;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function indexAdmin()
    {
        return view('admin.indexAdmin');
    }

    public function order()
    {
        return view('admin.order');
    }
    public function product()
    {
        $products = Product::query()->paginate(10);
        $categories = Category::all();
        return view('admin.product', compact('products', 'categories'));
    }
   
    public function category()
    {
        $categories = Category::all();
        return view('admin.category', ['categories' => $categories]);
    }
    

// Méthode pour stocker une nouvelle catégorie
public function storeCategory(Request $request)
{
    $request->validate([
        'cat_name' => 'required|string|max:255',
        'cat_type' => 'required|string|max:255',
    ]);

    Category::create([
        'category' => $request->cat_name,
        'type_category' => $request->cat_type,
    ]);

    return redirect()->route('admin.category')->with('success', 'Category added successfully');
}    /**
     * Show the form for creating a new resource.
     */
   
    

    
    public function storeProduct(Request $request)
    {
       // dd($request);
        // Validez les données du formulaire
        $validatedData = $request->validate([
            'pname' => 'required|string',
            'price' => 'required|numeric',
            'sdesc' => 'required|string',
            'category' => 'required|numeric', // Assurez-vous que le champ de la catégorie est requis et numérique
            'quantite' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
    
        // Créez un nouveau produit dans la base de données
        $product = new Product();
        $product->name = $validatedData['pname'];
        $product->price = $validatedData['price'];
        $product->description = $validatedData['sdesc'];
        $product->category_id= $validatedData['category']; // Utilisez la colonne "category_id"
        $product->quantity = $validatedData['quantite'];
        $product->image = $validatedData['image'];
    
        // Enregistrez le produit
        $product->save();
    
        // Redirigez l'utilisateur vers la page de produit avec un message de succès
        return redirect()->route('admin.product')->with('success', 'Le produit a été ajouté avec succès.');
    }
 

    //
    public function showStockForm()
{
    $products = Product::all();
    return view('admin.stock', compact('products'));
}
public function addStock(Request $request)
    {
        // Recherchez le produit dans la base de données en fonction du nom du produit
        $product = Product::where('name', $request->pname)->first();
        //dd($request->pname);
       // dd($product);
        // Vérifiez si le produit existe
       
            // Créez une nouvelle entrée de stock pour le produit avec les données spécifiées
            $stock = new Stock();
            $stock->Product_name = $product->name;
            $stock->Stock_in = $request->quantity; // Utilisez quantity pour Stock_in si c'est la quantité entrante
            $stock->save();

            // Redirigez l'utilisateur avec un message de succès
            return redirect()->route('admin.stock')->with('success', 'Le stock a été ajouté avec succès.');
      
    }
}