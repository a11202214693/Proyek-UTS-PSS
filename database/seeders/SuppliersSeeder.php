<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SuppliersSeeder extends Seeder
{
    public function run()
    {
        Supplier::insert([
            ['name' => 'PT Elektronik Jaya', 'contact_info' => '081234567890', 'created_by' => 1],
            ['name' => 'CV Mode Indo', 'contact_info' => '082345678901', 'created_by' => 2],
            ['name' => 'Toko Buku Ceria', 'contact_info' => '083456789012', 'created_by' => 1],
        ]);
    }
}
