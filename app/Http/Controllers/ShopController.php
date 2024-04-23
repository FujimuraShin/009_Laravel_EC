<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shop;

class ShopController extends Controller
{
    //

    public function index(){

        $object = new Shop();

        $data = $object->getData();

        //var_dump($data);

        return view('shop.index',['data' => $data]);
    }
}
