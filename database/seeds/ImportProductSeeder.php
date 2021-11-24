<?php

use Illuminate\Database\Seeder;

class ImportProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('importproducts')->insert([
            'product_id' => 1,
            'quantity' => 30,
            'price' => 200000,
            'description' => 'No',
        ]);
    }
}
