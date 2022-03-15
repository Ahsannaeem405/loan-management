<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('dashboard.admin.index');
    }

    public function myprofile()
    {
        return  view('dashboard.admin.myprofile');
    }
}
