<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index_page() {
        return view('index');
    }
    
    public function success() {
        return view('info-page.success');
    }

    public function failed() {
        return view('info-page.failed');
    }

   
}
