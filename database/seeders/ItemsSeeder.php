<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsSeeder extends Seeder
{
    public function run()
    {
        Item::insert([
            [
                'name' => 'TV LED 32 Inch',
                'description' => 'TV dengan kualitas HD',
                'price' => 2500000,
                'quantity' => 10,
                'category_id' => 1,
                'supplier_id' => 1,
                'created_by' => 1
            ],
            [
                'name' => 'Kemeja Batik',
                'description' => 'Kemeja batik modern',
                'price' => 150000,
                'quantity' => 20,
                'category_id' => 2,
                'supplier_id' => 2,
                'created_by' => 2
            ],
            [
                'name' => 'Buku Matematika',
                'description' => 'Buku pelajaran kelas 10',
                'price' => 80000,
                'quantity' => 30,
                'category_id' => 3,
                'supplier_id' => 3,
                'created_by' => 1
            ],
        ]);
    }
}

