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
                    <a href="index">
						<img src="../img/icons/online_shopping.png">
                        <div class="logo-text">
                            <p class="big-logo">Ecommerce</p>
                            <p class="small-logo">online shop</p>
                        </div>
                    </a>
                </div> <!-- logo -->
                <div class="shop-icon">
                    <div class="dropdown">
                        <img src="{{ asset('img/icons/account.png') }}">
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
                    <li><a  href="{{ route('admin.indexAdmin') }}">Accueil</a></li>
                    <li><a href="{{ route('admin.order') }}">Commande</a></li>
                    <li><a href="{{ route('admin.product') }}">Produit</a></li>
                    <li><a class="active" href="{{ route('admin.category') }}">Catégorie</a></li>
                    <li><a href="{{ route('admin.stock') }}">Stock</a></li>
                    <li><a href="">Utilisateurs</a></li>
                </ul>
            </div>
            <div class="content">
                <h3>Category</h3>
                <div class="content-data">
                    <div class="content-form">
                        <form method="POST" action="{{ route('category.store') }}">
                            @csrf
                            <h4>Add Category</h4>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="cat_name">
                                </div>
                                <div class="form-group">
                                    <label>Category Type</label>
                                    <input type="text" name="cat_type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="submit" name="addCategory" value="Add Category">
                            </div>
                        </form>
                    </div>
                    <div class="content-detail">
                        <h4>All Categories</h4>
                        <table>
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->category }}</td>
                                    <td>{{ $category->type_category }}</td>
                                    <td>
                                        <form action="{{ route('admin.category.edit', $category->id) }}" method="GET">
                                            @csrf
                                            <button type="submit">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
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
