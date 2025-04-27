<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::with('creator')->get();
        return response()->json($suppliers);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:100',
            'contact_info' => 'required|string|max:255',
            'created_by'  => 'required|exists:admins,id'
        ]);

        $supplier = Supplier::create($validated);

        return response()->json([
            'message' => 'Supplier created successfully.',
            'data'    => $supplier
        ], 201);
    }
}
