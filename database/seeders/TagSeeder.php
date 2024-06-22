<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        $tags = [
            ['name' => 'Fashion', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'Tech', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'Books', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            ['name' => 'Toys', 'created_at' => $currentTimestamp, 'updated_at' => $currentTimestamp],
            // Add more tags as needed
        ];

        // Insert tags into the database
        DB::table('tags')->insert($tags);
    }
}
