<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with(['category', 'supplier', 'creator'])->get();
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'description' => 'required|string',
            'price'       => 'required|numeric',
            'quantity'    => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'created_by'  => 'required|exists:admins,id'
        ]);

        $item = Item::create($validated);
        return response()->json([
            'message' => 'Item created successfully.',
            'data' => $item
        ], 201);
    }
}
