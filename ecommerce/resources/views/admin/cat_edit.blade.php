<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Edit Category</title>
    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <header>
        <!-- Header content here -->
    </header>

    <main>

        <div class="main-content">
            <div class="sidebar">
                <!-- Sidebar content here -->
            </div>
            <div class="content">
                <h3>Edit Category</h3>
                <div class="content-data">
                    <div class="content-form">
                        <form action="{{ route('admin.category.edite', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <h4>Edit Category</h4>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="cat_name" value="{{ $category->category }}">
                                </div>
                                <div class="form-group">
                                    <label>Category Type</label>
                                    <input type="text" name="cat_type" value="{{ $category->type_category }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="submit" name="updateCategory" value="Update Category">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <!-- Footer content here -->
    </footer>

</body>

</html>
