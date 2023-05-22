<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $states = [
            ['country_id' => 1, 'name' => 'Chennai', 'code' => 'MS'],
            ['country_id' => 1, 'name' => 'Madurai', 'code' => 'MD'],
            ['country_id' => 2, 'name' => 'NewYork', 'code' => 'NY'],
            ['country_id' => 2, 'name' => 'Califonia', 'code' => 'CA'],
            ['country_id' => 3, 'name' => 'Mosscow', 'code' => 'MW'],
            ['country_id' => 3, 'name' => 'Kazan', 'code' => 'KN'],
            ['country_id' => 4, 'name' => 'Tokyo', 'code' => 'TY'],
            ['country_id' => 4, 'name' => 'Hiroshima', 'code' => 'HA'],
            ['country_id' => 5, 'name' => 'London', 'code' => 'LN'],
            ['country_id' => 5, 'name' => 'Cambridge', 'code' => 'CB'],
            ['country_id' => 6, 'name' => 'Paris', 'code' => 'PA'],
            ['country_id' => 6, 'name' => 'Marseille', 'code' => 'ME'],
        ];

        foreach ($states as $state) {
            State::create([
                'country_id' => $state['country_id'],
                'name' => $state['name'],
                'code' => $state['code'],
            ]);
        }
    }
}
