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

            ['name'=>'ZEKARIAS KEBEDE', 'phone' => '9119454961', 'country_id' => 2],
            ['name'=>'EPHREM KINFE', 'phone' => '914148181', 'country_id' => 2],
            ['name'=>'Karim Niki', 'phone' => '966002259', 'country_id' => 2],
            ['name'=>'Frehiwot Teka', 'phone' => '988200000', 'country_id' => 2],
            ['name'=>'Fanetahune Abaia', 'phone' => '924418461', 'country_id' => 2],
            ['name'=>'Yonatan Tekelay', 'phone' => '911168450', 'country_id' => 2],

            ['name'=>'EMILE CHRISTIAN KOUKOU DIKANDA HONORE', 'phone' => '697151594', 'country_id' => 1],
            ['name'=>'MICHAEL MICHAEL', 'phone' => '677046616', 'country_id' => 1],
            ['name'=>'ARREYMANYOR ROLAND TABOT', 'phone' => '6A0311634', 'country_id' => 1],
            ['name'=>'LOUIS PARFAIT OMBES NTSO', 'phone' => '673122155', 'country_id' => 1],
            ['name'=>'JOSEPH FELICIEN NOMO', 'phone' => '695539786', 'country_id' => 1],
            ['name'=>'SUGAR STARRK BARRAGAN', 'phone' => '6622284920', 'country_id' => 1],
            ['name'=>'WILLIAM KEMFANG', 'phone' => '677046616', 'country_id' => 1],
            ['name'=>'THOMAS WILFRIED LOMO LOMO', 'phone' => '696443597', 'country_id' => 1],
            ['name'=>'Dominique mekontchou', 'phone' => '691816558', 'country_id' => 1],
            ['name'=>'Nelson Nelson', 'phone' => '699209115', 'country_id' => 1],
        ];

        Customer::query()->insert($customers);
    }

    public function run()
    {
        $this->insertCustomers();
    }
}
