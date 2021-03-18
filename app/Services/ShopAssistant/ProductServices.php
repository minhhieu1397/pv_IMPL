<?php

namespace App\Services\ShopAssistant;

use App\Services\Service;
use App\Services\ShopAssistant\Interfaces\ProductServiceInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Purchase;

class ProductService extends Service implements ProductServiceInterface
{
    public function getProductByUser()
    {
    	$products = Product::where('user_id', Auth::user()->id)->get();

    	return $products;
    }

    public function store($request)
    {
    	return Product::create([
            'name' => $request->input('name'),
            'user_id' => Auth::user()->id,
            'price' => $request->input('price'),
            'description' => $request->input('description')
        ]);
    }

    public function getPurchase()
    {   
        $product_Ids = Product::where('user_id', Auth::user()->id)->pluck('id');
        $purchases = Purchase::whereIn('product_id', $product_Ids)->get();

        return $purchases;
    }
}