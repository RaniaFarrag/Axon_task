<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function insertCountries()
    {
        $countries = [
            ['country_name'=>'Cameroon', 'state' => true, 'country_code' => '+237'],
            ['country_name'=>'Ethiopia', 'state' => true, 'country_code' => '+251'],
            ['country_name'=>'Morocco', 'state' => true, 'country_code' => '+212'],
            ['country_name'=>'Mozambique', 'state' => true, 'country_code' => '+258'],
            ['country_name'=>'Uganda', 'state' => true, 'country_code' => '+256'],
        ];

        Country::query()->insert($countries);
    }

    public function run()
    {
        $this->insertCountries();
    }
}
