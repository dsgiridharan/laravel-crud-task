<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $countries = [
            ['name' => 'India', 'code' => 'IN'],
            ['name' => 'America', 'code' => 'US'],
            ['name' => 'Russia', 'code' => 'RU'],
            ['name' => 'Japan', 'code' => 'JP'],
            ['name' => 'England', 'code' => 'UK'],
            ['name' => 'France', 'code' => 'FR'],

        ];

        foreach ($countries as $country) {
            Country::create([
                'code' => $country['code'],
                'name' => $country['name'],
            ]);
        }
    }
}
