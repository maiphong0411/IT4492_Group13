<?php

use Illuminate\Database\Seeder;

class ReturnProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('returnproducts')->insert([
            'product_id' => 1,
            'customer_id' => 23,
            'quantity' => 2,
            'description' => 'No',
            'price' => 300000,
            'from' => 1,
            'to' => 3,
            'state' => 1
        ]);
    }
}
