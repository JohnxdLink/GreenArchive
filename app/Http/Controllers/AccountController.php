<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index_page() {
        return view('index');
    }

    public function registered_get_data(Request $request) {
        // ! dd($request); for checking if the data is requested to post
        
        $validate_registered_data = $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'location' => 'nullable',
            'occupation' => 'nullable',
            'bio' => 'nullable',
            'certified_botanist' => 'boolean',
            'agree_terms' => 'boolean'
        ]);

        $new_account = Account::create($validate_registered_data);

        return redirect(route('info-page.success'));
    }

    public function success() {
        return view('info-page.success');
    }

    public function failed() {
        return view('info-page.failed');
    }
}
