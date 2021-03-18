<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\Interfaces\ProductServiceInterface;
use App\Models\Product;

class ProductsController extends Controller
{
	protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
    	$products = $this->productService->getAllProduct();

    	return view('user.products.index', compact('products'));
    }

    public function sellProduct(Product $product)
    {
    	if ($this->productService->purchaseItem($product)) {
    		return redirect()->route('user.users.cart')->with(['message-success' => 'Success']);
    	} else {
    		return redirect()->route('user.users.cart')->with(['message-error' => 'Success']);
    	}
    }
}
