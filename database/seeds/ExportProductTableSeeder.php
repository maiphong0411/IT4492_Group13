<?php

use Illuminate\Database\Seeder;

class ExportProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exportproducts')->insert([
            'product_id' => 1,
            'customer_id' => 3,
            'quantity' => 12,
            'customer_id' => 20,
            'price' => 300000,
            'description' => 'No'
        ]);
    }
}
