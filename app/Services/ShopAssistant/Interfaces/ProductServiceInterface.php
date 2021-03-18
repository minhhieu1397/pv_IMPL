<?php

namespace App\Services\ShopAssistant\Interfaces;

use Illuminate\Http\Request;

interface ProductServiceInterface
{
    public function getProductByUser();
    public function store($request);
    public function getPurchase();
}
