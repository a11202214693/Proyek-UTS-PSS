<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class LowStockItemController extends Controller
{
    public function index($stock)
    {
        $lowStockItems = Item::where('quantity', '<', $stock)->get();

        return response()->json($lowStockItems);
    }
}
