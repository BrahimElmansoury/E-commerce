<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function edit(Category $category)
    {
        return view('admin.cat_edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'cat_name' => 'required|string',
            'cat_type' => 'required|string',
        ]);

        $category->update([
            'category' => $request->cat_name,
            'type_category' => $request->cat_type,
        ]);

        return redirect()->route('admin.category')->with('success', 'Category updated successfully');
    }
}
