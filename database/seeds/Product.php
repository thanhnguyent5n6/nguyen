<?php

use Illuminate\Database\Seeder;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category_id = ["1","1","1","1","2","2"];
    	$name = ["IPhone 6","IPhone 6 Plus","IPhone 7","IPhone 7 Plus","SamSumg Galaxy S8","SamSumg Galaxy S8 Plus"];
        $price = ["6000000","7000000","8000000","9000000","10000000","11000000"];
        $description = ["Đây là IPhone 6","Đây là IPhone 6 Plus","Đây là IPhone 7","Đây là IPhone 7 Plus","Đây là SamSumg Galaxy S8","Đây là SamSumg Galaxy S8 Plus"];
        $content = ["Đây là IPhone 6","Đây là IPhone 6 Plus","Đây là IPhone 7","Đây là IPhone 7 Plus","Đây là SamSumg Galaxy S8","Đây là SamSumg Galaxy S8 Plus"];
        for($i = 0 ; $i < 6 ; $i ++)
        {
        	DB::table('products')->insert([
                'category_id' => $category_id[$i],
                'name' => $name[$i],
                'price' => $price[$i],
                'description' => $description[$i],
                'content' => $content[$i],
	        ]);
        }
    }
}
