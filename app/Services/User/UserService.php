<?php

namespace App\Services\User;

use App\Services\Service;
use App\Services\User\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Purchase;
use App\Models\Product;

class UserService extends Service implements UserServiceInterface
{
    public function changeRole()
    {
        $user = Auth::user();

        return $user->update([
            'role' => User::ROLE_SELL
        ]);
    }

    public function getPurchasesByUser()
    {
    	$user = Auth::user();
    	$purchases = $user->purchases()->get();
    	
    	return $purchases;
    }
}