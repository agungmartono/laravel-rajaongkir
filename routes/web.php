<?php

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

Auth::routes();

Route::get('/', 'RajaOngkirController@index')->name('rajaongkir');
Route::get('/city/{prov_id}', 'RajaOngkirController@cityByProvince');
Route::get('/subdistrict/{city_id}', 'RajaOngkirController@subdistrictByProvince');
Route::get('/cost/{origin}/subdistrict/{dest}/subdistrict/{weight}/{curier}', 'RajaOngkirController@cetakCost');

Route::get('/waybill/{waybill}/{courier}', 'RajaOngkirController@willBill');
Route::get('/resi', 'RajaOngkirController@resi');