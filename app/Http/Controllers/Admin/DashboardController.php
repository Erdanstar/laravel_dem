<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //Dashboard
    public function dashboard($local)
    {
      app()->setLocale($local);
      return view('admin.dashboard', ['local'=>$local]);
    }
}
