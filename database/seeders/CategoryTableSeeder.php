<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $names = [
            "Легкий",
            "Хрупкий",
            "Тяжёлый"
        ];

        foreach($names as $name) {
            Category::query()->create([
                'name' => $name
            ]);
        }
    }
}
