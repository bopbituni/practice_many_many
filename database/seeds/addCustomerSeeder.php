<?php

use App\Customers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class addCustomerSeeder extends Seeder
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
                'email' => Str::random(20)
            ]);
        }
        DB::table('customers')->insert($arr);
    }
}
