<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Products();
        $product->name = "Sản Phẩm 01";
        $product->description = "Sản phẩm có mã số 001";
        $product->price = 1.5;
        $product->image= "ahihi";
        $product->view_count = 0;
        $product->save();


    }
}
