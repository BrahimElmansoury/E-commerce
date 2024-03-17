<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

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
    public function stock()
{
    // Vous pouvez ajouter ici la logique pour récupérer les informations relatives aux stocks
    // depuis la base de données, puis les passer à la vue
    $products = Product::all(); // Exemple de récupération de tous les produits
    return view('admin.stock', compact('products'));
    return view('admin.stock');
}

// Méthode pour ajouter du stock
public function addStock(Request $request)
{
    // Validez les données du formulaire
    $validatedData = $request->validate([
        'pname' => 'required|string', // Assurez-vous que le nom du produit est requis
        'quantity' => 'required|numeric', // Assurez-vous que la quantité est requise et numérique
    ]);

    // Recherchez le produit dans la base de données en fonction du nom du produit
    $product = Product::where('name', $validatedData['pname'])->first();

    // Vérifiez si le produit existe
    if ($product) {
        // Si le produit existe, vous pouvez ajouter la logique pour mettre à jour le stock du produit
        // par exemple, en ajoutant la quantité spécifiée à la quantité actuelle du produit
        $product->quantity += $validatedData['quantity'];
        $product->save();

        // Redirigez l'utilisateur avec un message de succès
        return redirect()->route('admin.stock')->with('success', 'Le stock a été ajouté avec succès.');
    } else {
        // Si le produit n'existe pas, redirigez l'utilisateur avec un message d'erreur
        return redirect()->route('admin.stock')->with('error', 'Le produit spécifié n\'existe pas.');
    }
}







// Autres méthode
}
