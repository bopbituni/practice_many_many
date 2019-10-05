<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class addProduct_billSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        for($i = 1; $i <= 10; $i++){
            array_push($arr, [
                'bills_id' => $i,

                'products_id' => $i,
            ]);
        }
        DB::table('product-bill')->insert($arr);
    }
}
