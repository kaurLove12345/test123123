<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function pricing()
    {
        return view('auth.pricing');
    }
}
