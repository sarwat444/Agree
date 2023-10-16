<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('admin.dashboard.index');
    }
    public function tawzef_model()
    {
        return view('admin.namozags.tawzef');
    }
}
