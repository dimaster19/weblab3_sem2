<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Client\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return $categories;
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Category::create($request->all());

        return true;
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',

        ]);

        $category->update($request->all());
        return true;

    }


    public function destroy(Category $category)
    {
       $category->delete();
       return true;

    }
}
