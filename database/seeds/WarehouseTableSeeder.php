<?php

use Illuminate\Database\Seeder;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->insert([
            'id' => 1111,
            'name' => 'Main',
            'address' => 'Hanoi',
        ]);
    }
}
