<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DashboardController extends backendController
{
 
    public function index()
    {
        return view($this->pagePath . 'dashboard.dashboard', $this->data);

    }
}
