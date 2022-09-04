<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(Request $request) {
        $data = $request->toArray();
        $product = new Product();
        $product->name = $data['name'];
        $product->count = $data['count'];
        $product->price = $data['price'];
        $product->shelf_life = date_create_from_format('Y-m-d', $data['shelf_life']);
        $product->group_id = $data['group'];
        $product->save();
        return new JsonResponse($data);
    }

}
