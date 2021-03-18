<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\User\Users\CreateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
    	return view('user.login');
    }

    public function login(Request $request)
    {
    	$email = $request->input('email');
    	$password = $request->input('password');
        $remember = $request->input('remember');
        
        if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->route('user.product.index');
        } else {
            return back()->withInput()->withErrors([
                'errorLogin' => 'Username or password incorrect'
            ]);
        }
    }

    public function showRegisterForm()
    {
    	return view('user.register');
    }

    public function register(CreateUserRequest $request)
    {
    	$user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password' => \Hash::make($request->input('password')),
            'role' => User::ROLE_BUY
        ]);

        if ($user) {
			return redirect()->route('user.login')->with(['message-success' => 'Have error when create account']);
        } else {
        	return redirect()->route('user.register')->with(['message-error' => 'Have error when create account']);
        }
    }

    public function logout(Request $request) {
        Auth::logout();

        return redirect()->route('user.login');
    }
}
