<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends backendController
{
    public function index()
    {
        return view($this->pagePath . 'dashboard.dashboard', $this->data);

    }
}
