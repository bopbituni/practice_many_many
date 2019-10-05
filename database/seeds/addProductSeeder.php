<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class addProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];
        for($i = 0; $i < 10; $i++){
            array_push($arr, [
                'name' => Str::random(12),
                'price' => rand(20,500)
            ]);
        }
        DB::table('products')->insert($arr);
    }
}
