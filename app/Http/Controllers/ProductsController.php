<?php

namespace App\Http\Controllers;

use App\Models\Product\ProductModel;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function singleProduct($id)
    {
        $product = ProductModel::find($id);

        $relatedProducts = ProductModel::where('type', $product->type)
            ->where('id', '!=', $id)->take('4')->orderBy('id', 'desc')->get();

        return view("products.productsingle", compact("product", "relatedProducts"));
    }
}
