<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json(['data' => $categories, 'success' => true], 200);
    }

    public function store(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json(['data' => $category, 'success' => true], 201);
    }

    public function show(Category $category)
    {
        return response()->json(['data' => $category, 'success' => true], 200);
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        return response()->json(['data' => $category, 'success' => true], 201);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([null, 'success' => true], 204);
    }
}
