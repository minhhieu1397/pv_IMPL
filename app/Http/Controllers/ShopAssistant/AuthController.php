<?php

namespace App\Http\Controllers\ShopAssistant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
    	return view('shop_assistant.login');
    }

    public function login(Request $request)
    {
    	$email = $request->input('email');
    	$password = $request->input('password');
        $remember = $request->input('remember');
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
        	if (Auth::user()->role == User::ROLE_SELL) {
        		return redirect()->route('shop_assistant.index');
        	} else {
            	return redirect()->route('user.shops.index');
            }
        } else {
            return back()->withInput()->withErrors([
                'errorLogin' => 'Username or password incorrect'
            ]);
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        return redirect()->route('shop_assistant.login');
    }
}
