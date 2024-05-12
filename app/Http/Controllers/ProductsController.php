<?php

namespace App\Http\Controllers;

use App\Models\Product\ProductModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function singleProduct($id)
    {
        $product = ProductModel::find($id);

        return view("products.productsingle", compact("product"));
    }
}
