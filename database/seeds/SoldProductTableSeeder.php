<?php

use Illuminate\Database\Seeder;

class SoldProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soldproducts')->insert([
            'id' => 1,
            'product_id' => 1,
            'quantity' => 12,
        ]);
    }
}
