<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('creator')->get();
        return response()->json($categories);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'description' => 'required|string',
            'created_by'  => 'required|exists:admins,id'
        ]);

        $category = Category::create($validated);

        return response()->json([
            'message' => 'Category created successfully.',
            'data'    => $category
        ], 201);
    }
}
