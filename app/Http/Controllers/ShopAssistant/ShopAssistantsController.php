<?php

namespace App\Http\Controllers\ShopAssistant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopAssistantsController extends Controller
{
    public function index()
    {
    	return redirect()->route('shop_assistant.products.index');
    }
}
