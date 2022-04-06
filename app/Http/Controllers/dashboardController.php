<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dasboard()
    {
        return view('dashboard');
    }
}
