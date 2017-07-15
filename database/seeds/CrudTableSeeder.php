<?php

use Illuminate\Database\Seeder;
use App\Crud;

class CrudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'name' => 'Test1 Name',
        		'contact' => '09123456789',
        		'address' => 'Quezon City'

        	],

        	[
        		'name' => 'Test2 Name',
        		'contact' => '09987654321',
        		'address' => 'Pasig City'

        	],

        	[
        		'name' => 'Test3 Name',
        		'contact' => '09333333333',
        		'address' => 'Makati City'

        	]

        ];

        foreach ($data as $item){
        	Crud::create($item);
        }

    }
}
