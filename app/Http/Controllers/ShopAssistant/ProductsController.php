<?php

namespace App\Http\Controllers\ShopAssistant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ShopAssistant\Products\CreateProductRequest;
use App\Services\ShopAssistant\Interfaces\ProductServiceInterface;

class ProductsController extends Controller
{
	protected $productService;

    public function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
    	$products = $this->productService->getProductByUser();

    	return view('shop_assistant.products.index', compact('products'));
    }

    public function create()
    {
    	return view('shop_assistant.products.create');
    }

    public function store(CreateProductRequest $request)
    {
    	if ($this->productService->store($request)) {
    		return redirect()->route('shop_assistant.index');
    	} else {
    		 return back()->withInput()->withErrors([
                'error' => 'Have Error'
            ]);
    	}
    }

    public function status()
    {
        $purchases = $this->productService->getPurchase();

        return view('shop_assistant.products.status', compact('purchases'));
    }
}
