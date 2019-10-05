<?php


namespace App\Http\Controllers;


use App\Bills;
use App\Customers;
use App\Products;

class CustomerController
{
    public function index()
    {
        $bills = Bills::with('customers')->where(['id' => 5])->get();
        foreach ($bills as $bill){
            foreach ($bill->Product as $product){
                echo "Khach hang : " . $bill->customers->name . " Da mua san pham : " . $product->name;
            } ;
        }

//        return view('list', compact('customers'));
    }
}