<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin_dashboard(){
        return view('backend.pages.dashboard');
    }

}
