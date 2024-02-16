<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    //
    public function create()
    {
        return view('index');
    }
    
    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:green_archive_accounts|max:255',
            'password' => 'required|string|min:8|confirmed',
            'location' => 'nullable|string|max:255',
            'occupation' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'certified_botanist' => 'boolean',
            'agree_terms' => 'required|boolean',
        ]);

        // Create a new account
        $newAccount = Account::create($validatedData);

        if (!$newAccount) {
            // Log or dd() any errors
            dd('Error saving account');
        }

        // Redirect with success message
        return redirect()->route('register.create')->with('success', 'Registered Successfully');
    }
}
