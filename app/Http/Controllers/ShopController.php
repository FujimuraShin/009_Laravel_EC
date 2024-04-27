<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Shop;
use App\Models\ProductsDetail;

class ShopController extends Controller
{
    //

    public function index(){

        $object = new Shop();

        $data = $object->getData();

        //var_dump($data);

        return view('shop.index',['data' => $data]);
    }


    public function productsDetail(Request $request){
        //var_dump($request);

        $id=$request->id;

        $shop = new Shop();

        $detail = new ProductsDetail();


        $shops = $shop->find($id);

        $details=$detail->find($id);

        //var_dump($details);

        return view('shop.detail',['shops' => $shops, 'details' => $details]);

    }
}
