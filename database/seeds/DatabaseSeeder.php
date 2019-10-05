<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(addCustomerSeeder::class);
        $this->call(addBillSeeder::class);
        $this->call(addProductSeeder::class);
        $this->call(addProduct_billSeeder::class);

    }
}
