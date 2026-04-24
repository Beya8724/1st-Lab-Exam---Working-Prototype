<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller 
{
    // 1. Mao ni ang mogawas una (Login Page)
    public function login() 
    { 
        return view('customer.login'); 
    }

    // 2. Para sa mga wala pay account
    public function register() 
    { 
        return view('customer.register'); 
    }

    // 3. Mao ni ang Order Form (ang naa sa imong screenshot)
    public function index() 
    { 
        return view('customer.home'); 
    }

    // 4. Para sa pag-check sa status sa labada
    public function track() 
    { 
        return view('customer.track'); 
    }
}