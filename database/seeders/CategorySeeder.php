<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        $categories = [
            ['name' => 'Electronics', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'Clothing', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'Books', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'Confectionaries', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
        
        ];

        DB::table('categories')->insert($categories);
    }
}
