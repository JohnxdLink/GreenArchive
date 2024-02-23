<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function landing_page()
    {
        return view('landing-page.index');
    }

    public function login_page()
    {
        return view('login-page.login');
    }

    public function register_page()
    {
        return view('login-page.register');
    }

    public function success_page()
    {
        return view('info-page.success');
    }

    public function failed_page()
    {
        return view('info-page.failed');
    }

    public function insert_data(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:4',
            'confirmed_password' => 'required|string|min:4',
            'location' => 'nullable|string|max:255',
            'occupation' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:225',
            'certified_botanist' => 'boolean',
            'agree_terms' => 'required|boolean'
        ]);

        $newAccount = Account::create($validatedData);

        return view('info-page.success');
    }
}
