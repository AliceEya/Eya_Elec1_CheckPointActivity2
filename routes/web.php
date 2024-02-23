<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('item/{item_no?}/{name?}/{price?}', function ($item_no = '101', $name = 'Poco F4', $price = 'Php 16,999.00') {
    return view('item', ['item_no' => $item_no, 'name' => $name, 'price' => $price]);
})->name('item');

Route::get('customer/{customer_id?}/{name?}/{address?}', function ($customer_id = '21-UR-1425', $name = 'Alice Zandra Eya', $address = 'San Manuel, Tarlac') {
    return view('customer', ['customer_id' => $customer_id, 'name' => $name, 'address' => $address]);
})->name('customer');

Route::get('order/{customer_id?}/{name?}/{order_no?}/{date?}', function ($customer_id = '21-UR-1425', $name = 'Alice Zandra Eya', $order_no = '01', $date = 'February 23, 2024') {
    return view('order', ['customer_id' => $customer_id, 'name' => $name, 'order_no' => $order_no, 'date' => $date]);
})->name('order');

Route::get('order_details/{transNo?}/{order_no?}/{item_id?}/{name?}/{price?}/{qty?}', function ($transNo = '1001', $order_no = '01', $item_id = '101', $name = 'Alice Zandra Eya', $price = 'Php 16,999.00', $qty = '2') {
    return view('order_details', ['transNo' => $transNo, 'order_no' => $order_no, 'item_id' => $item_id, 'name' => $name, 'price' => $price, 'qty' => $qty]);
})->name('order_details');
