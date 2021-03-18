<?php

namespace App\Services\User;

use App\Services\Service;
use App\Services\User\Interfaces\ProductServiceInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Purchase;

class ProductService extends Service implements ProductServiceInterface
{
	public function getAllProduct()
	{
    	return Product::all();
	}

	public function purchaseItem($product)
	{
		return Purchase::create([
            'product_id' => $product->id,
            'buyer_id' => Auth::user()->id,
            'status' => Purchase::STATUS_NO_PROCESS,
        ]);
	}
}