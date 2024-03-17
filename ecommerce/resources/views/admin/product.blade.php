<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="author" content="Kamran Mubarik">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Create an E-Commerce Website using HTML, CSS and JS</title>
    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <header>
        <div class="container">
            <div class="brand">
                <div class="logo">
                    <a href="index.html">
                        <img src="../img/icons/online_shopping.png">
                        <div class="logo-text">
                            <p class="big-logo">Ecommerce</p>
                            <p class="small-logo">online shop</p>
                        </div>
                    </a>
                </div> <!-- logo -->
                <div class="shop-icon">
                    <div class="dropdown">
                        <img src="../img/icons/account.png">
                        <div class="dropdown-menu">
                            <ul>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- shop icons -->
            </div> <!-- brand -->
        </div> <!-- container -->
    </header> <!-- header -->

    <main>

        <div class="main-content">
            <div class="sidebar">
                <h3>Menu</h3>
                <ul>
                    <ul>
                        <li><a class="active" href="{{ route('admin.indexAdmin') }}">Accueil</a></li>
                        <li><a href="{{ route('admin.order') }}">Commande</a></li>
                        <li><a href="{{ route('admin.product') }}">Produit</a></li>
                        <li><a href="{{ route('admin.category') }}">Catégorie</a></li>
                        <li><a href="{{ route('admin.stock') }}">Stock</a></li>
                        <li><a href="">Utilisateurs</a></li>
                    </ul>

                </ul>
            </div>
            <div class="content">
                <h3>Product</h3>
                <div class="content-data">
                    <div class="content-form">
                        <form action="{{ route('products.storeProduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            <h4>Add Product</h4>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="pname">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price">
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" name="quantite">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" name="sdesc">
                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category">
                                        <option>---Select a Category---</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Images</label>
                                    <input type="file" name="image" multiple>
                                </div>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="submit" name="addProduct" value="Add Product">
                            </div>
                        </form>

                    </div>
                    <div class="content-detail">
                        <h4>All Products</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        @foreach($categories as $category)
                                            @if($category->id == $product->category_id)
                                                {{ $category->type_category }}
                                            @endif
                                        @endforeach
                                    </td>
                               
                                    <td>
                                        <form action="{{ route('products.edit', $product->id) }}" method="GET">
                                            @csrf
                                            <button type="submit">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                                                             
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main> <!-- Main Area -->

    <footer>
        <div class="container">
            <div class="footer-bar">
                <div class="copyright-text">
                    <p>Copryright 2020 - All Rights Reserved</p>
                </div>
            </div> <!-- Footer Bar -->
        </div>
    </footer> <!-- Footer Area -->

</body>

</html>
