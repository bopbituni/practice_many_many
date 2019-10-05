<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class addBillSeeder extends Seeder
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
                'total' => rand(1,11),
                'customers_id' => $i,
            ]);
        }
        DB::table('bills')->insert($arr);
    }
}
