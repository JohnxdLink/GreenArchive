<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index_page() {
        return view('index');
    }

    public function login_page() {
        return view('login-page.login');
    }

    public function register_page() {
        return view('login-page.register');
    }

    public function success_page() {
        return view('info-page.success');
    }

    public function failed_page() {
        return view('info-page.failed');
    }

   
}
