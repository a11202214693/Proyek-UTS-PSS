<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class StockSummaryController extends Controller
{
    public function index()
    {
        $summary = Item::select(
            DB::raw('SUM(quantity) as total_stock'),
            DB::raw('SUM(price * quantity) as total_stock_value'),
            DB::raw('AVG(price) as average_price')
        )->first(); 

        return response()->json([
            'total_stock' => $summary->total_stock,
            'total_stock_value' => number_format($summary->total_stock_value, 2),
            'average_price' => number_format($summary->average_price, 2)
        ]);
    }
}
