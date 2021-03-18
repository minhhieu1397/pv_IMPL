<?php

namespace App\Services\User\Interfaces;

use Illuminate\Http\Request;

interface ProductServiceInterface
{
    public function getAllProduct();
    public function purchaseItem($product);
}
