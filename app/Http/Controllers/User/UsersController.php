<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
	protected $userService;

    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function registerSell()
    {
    	return view('User.users.register_sell');
    }

    public function changeRole()
    {
    	if ($this->userService->changeRole()) {
            return redirect()->route('user.user.sell');
        } else {
            return back()->with(['message-error' => 'Have error when change role']);
        }
    }

    public function myCart()
    {
        $purchases = $this->userService->getPurchasesByUser();

        return view('User.users.cart', compact('purchases'));
    }
}
