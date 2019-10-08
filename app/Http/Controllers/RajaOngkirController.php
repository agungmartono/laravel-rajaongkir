<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RajaOngkir;

class RajaOngkirController extends Controller
{
    public function index()
    {
        $provinceJson = $this->province();
        $cityJson = $this->city();
        $subdistrictJson = $this->subdistrict();

        $provinceDestJson = $this->province();
        $cityDestJson = $this->city();
        $subdistrictDestJson = $this->subdistrict();
        
        return view('rajaongkir.index', [
            'province'=>$provinceJson, 'city'=>$cityJson, 'provinceDest'=>$provinceDestJson, 
            'cityDest'=>$cityDestJson, 'subdistrictJson'=>$subdistrictJson,'subdistrictDestJson'=>$subdistrictDestJson]);
    }

    public function province()
    {
        $tracking = new RajaOngkir;
        $url = "https://pro.rajaongkir.com/api/province?";
        $province = $tracking->serverApi($url);
        $provinceJson = json_decode($province,true);
        $provinceJson =  $provinceJson["rajaongkir"]["results"];
        $arrEmty = [
            "province_id" => "",
            "province" => ""
            ];
        array_unshift($provinceJson,$arrEmty);    
        return $provinceJson;
    }
    
    public function city()
    {
        $tracking = new RajaOngkir;
        $url = "https://pro.rajaongkir.com/api/city?";
        $city = $tracking->serverApi($url);
        $cityJson = json_decode($city,true);
        $cityJson =  $cityJson["rajaongkir"]["results"];
        $arrEmty = [
            "city_id" => "",
            "city_name" => ""
            ];
        array_unshift($cityJson,$arrEmty);    
        return $cityJson;
    }

    public function subdistrict()
    {
        $tracking = new RajaOngkir;
        $url = "https://pro.rajaongkir.com/api/subdistrict?city=?";
        $subdistrict = $tracking->serverApi($url);
        $subdistrictJson = json_decode($subdistrict,true);
        $subdistrictJson =  $subdistrictJson["rajaongkir"]["results"];
        $arrEmty = [
            "subdistrict_id" => "",
            "subdistrict_name" => ""
            ];
        array_unshift($subdistrictJson,$arrEmty);    
        return $subdistrictJson;
    }

    public function cityByProvince($prov_id)
    {
        $tracking = new RajaOngkir;
         $url = "https://pro.rajaongkir.com/api/city?province=$prov_id";
         $city = $tracking->serverApi($url);
         $cityJson = json_decode($city,true);
         $cityJson =  $cityJson["rajaongkir"]["results"];
         $arrEmty = [
             "city_id" => "",
             "city_name" => ""
             ];
         array_unshift($cityJson,$arrEmty);    
         foreach($cityJson as $var){
            echo '<option value="'.$var['city_id'].'">'.$var['city_name'].'</option>';
         }
    }

    public function subdistrictByProvince($city_id)
    {
        $tracking = new RajaOngkir;
         $url = "https://pro.rajaongkir.com/api/subdistrict?city=$city_id";
         $subdistrict = $tracking->serverApi($url);
         $subdistrictJson = json_decode($subdistrict,true);
         $subdistrictJson =  $subdistrictJson["rajaongkir"]["results"];
         $arrEmty = [
             "subdistrict_id" => "",
             "subdistrict_name" => ""
             ];
         array_unshift($subdistrictJson,$arrEmty);    
         foreach($subdistrictJson as $var){
            echo '<option value="'.$var['subdistrict_id'].'">'.$var['subdistrict_name'].'</option>';
         }
    }

    public function cetakCost($origin,$dest,$weight, $curier)
    {    
        $tracking = new RajaOngkir;
        $url = "origin=".$origin."&originType=subdistrict&destination=".$dest."&destinationType=subdistrict&weight=".$weight."&courier=".$curier."";
        $cost = $tracking->apiCost($url);
        $costJson = json_decode($cost,true);
        $costJson = $costJson["rajaongkir"]["results"];
        $code = $costJson[0]['code'];
        $name = $costJson[0]['name'];
        $cost = $costJson[0]['costs'];

        return view ('rajaongkir.cost', ['code'=>$code,'name'=>$name,'cost'=>$cost]);
    }

    public function resi()
    {
        return view('rajaongkir.resi');
    }

    public function willBill($waybill, $courier)
    {
        $tracking = new RajaOngkir;
        $url = "waybill=".$waybill."&courier=".$courier."";
        $response = $tracking->apiBill($url);
        $willbillJsonDecode = json_decode($response, true);
        $willbillJson = $willbillJsonDecode["rajaongkir"]["result"]["manifest"];

        return view('rajaongkir.willbill', ['willbillJsonDecode'=>$willbillJsonDecode, 'willbillJson'=>$willbillJson]);

    }
    
}
