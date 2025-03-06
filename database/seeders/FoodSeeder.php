<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedConfig = config('models.seeding.food');
        $foodItems = $seedConfig['default_list'];

        foreach ($foodItems as $foodItem) {
            Food::updateOrCreate(
                [
                    'name' => $foodItem['name'],
                ],
                [
                    'protein' => $foodItem['protein'],
                    'carbs' => $foodItem['carbs'],
                    'fat' => $foodItem['fat'],
                    'grams' => $foodItem['grams']
                ],
            );
        }
        $useFactory = $seedConfig['factory'];
        $factoryCount = $seedConfig['factory_count'];

        if ($useFactory) {
            Food::factory()->count($factoryCount)->create();
        }
    }
}
