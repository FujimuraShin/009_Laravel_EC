<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductsDetail;

class ProductDetailController extends Controller
{
    //

    public function index(){
        
        //$products_detail = ProductsDetail::all();

        $product_detail = new ProductsDetail();

        $products_detail = $product_detail->getData();


        return view('shop.detail',['products_detail' => $products_detail]);
    }
}
