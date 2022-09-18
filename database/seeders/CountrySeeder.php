<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country();
        $country->name = 'Egypt';
        $country->save();
    }
}
