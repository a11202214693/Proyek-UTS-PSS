<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        Category::insert([
            ['name' => 'Elektronik', 'description' => 'Peralatan elektronik rumah', 'created_by' => 1],
            ['name' => 'Pakaian', 'description' => 'Pakaian pria dan wanita', 'created_by' => 2],
            ['name' => 'Buku', 'description' => 'Buku bacaan dan pelajaran', 'created_by' => 1],
        ]);
    }
}

