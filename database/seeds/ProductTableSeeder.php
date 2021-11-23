<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'name' => 'T-shirt',
            'size' => 'M',
            'quantity' => 20,
            'warehouse_id' => 1111,
            'source' => 'CN',
            'price' => 300000,
        ]);
    }
}
