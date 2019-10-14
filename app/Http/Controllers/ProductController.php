<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function storeProduct(Request $request){
        $data = $request->all();
        return Product::create($data);
    }
}
