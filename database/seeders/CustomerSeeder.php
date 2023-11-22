<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function insertCustomers()
    {
        $customers = [
            ['name'=>'Walid Hammadi', 'phone' => '6007989253', 'country_id' => 3],
            ['name'=>'Yosaf Karrouch', 'phone' => '698054317', 'country_id' => 3],
            ['name'=>'Younes Boutikyad', 'phone' =>  '6546545369', 'country_id' => 3],
            ['name'=>'Houda Houda', 'phone' => '6617344445', 'country_id' => 3],
            ['name'=>'Chouf Malo', 'phone' => '691933626', 'country_id' => 3],
            ['name'=>'soufiane fritisse', 'phone' => '633963130', 'country_id' => 3],
            ['name'=>'Nada Sofie', 'phone' => '654642448', 'country_id' => 3],
            ['name'=>'Edunildo Gomes Alberto', 'phone' => '847651504', 'country_id' => 4],
            ['name'=>'Walla s Singz Junior', 'phone' => '846565883', 'country_id' => 4],
            ['name'=>'sevilton sylvestre', 'phone' => '849181828', 'country_id' => 4],
            ['name'=>'Tanvi Sachdeva', 'phone' => '84330678235', 'country_id' => 4],
            ['name'=>'Florencio Samuel', 'phone' => '847602609', 'country_id' => 4],
            ['name'=>'Solo Dolo', 'phone' => '042423566', 'country_id' => 4],
            ['name'=>'Pedro B 173', 'phone' => '823747618', 'country_id' => 4],
            ['name'=>'Ezequiel Fenias', 'phone' => '848826725', 'country_id' => 4],

            ['name'=>'JACKSON NELLY', 'phone' => '775069443', 'country_id' => 5],
            ['name'=>'Kiwanuka Budallah', 'phone' => '7503O6263', 'country_id' => 5],
            ['name'=>'VINEET SETH', 'phone' => '704244430', 'country_id' => 5],
            ['name'=>'Jokkene Richard', 'phone' => '7734127498', 'country_id' => 5],
            ['name'=>'Ogwal David', 'phone' => '7771031454', 'country_id' => 5],
            ['name'=>'pt shop 0901 Ultimo', 'phone' => '3142345678', 'country_id' => 5],
            ['name'=>'Daniel Makori', 'phone' => '714660221', 'country_id' => 5],
            ['name'=>'shop23 sales', 'phone' => '9773199405', 'country_id' => 2],
            ['name'=>'Filimon Embaye', 'phone' => '914701723', 'country_id' => 2],
            ['name'=>'ABRAHAM NEGASH', 'phone' => '911203317', 'country_id' => 2],
        ];

        Customer::query()->insert($customers);
    }

    public function run()
    {
        $this->insertCustomers();
    }
}
