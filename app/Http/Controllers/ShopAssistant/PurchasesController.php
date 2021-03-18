<?php

namespace App\Http\Controllers\ShopAssistant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Purchase;

class PurchasesController extends Controller
{
    public function updateStatus(Purchase $purchase, Request $request)
    {
    	$updatePurchase = $purchase->update([
            'status' => $request->input('status'),
        ]);
        
    	if ($updatePurchase) {
    		return back()->withInput()->with([
                'success' => 'Username or password incorrect'
            ]);
    	} else {
    		return back()->withInput()->with([
                'error' => 'Username or password incorrect'
            ]);
    	}
        
    }
}
