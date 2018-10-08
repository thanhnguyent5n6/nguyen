<?php

use Illuminate\Database\Seeder;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $categories = ["Iphone","Samsung","Nokia","Vertu","B-Phone"];
        for($i = 0 ; $i < 5 ; $i ++)
        {
        	DB::table('categories')->insert([
	            'name' => $categories[$i]
	        ]);
        }
        
    }
}
