<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendController extends Controller
{

    public $backendPath='backend.';
    public $pagePath= '';
//working of the constructor
    public function __construct(){
        $this->data('title', $this->title('Admin'));//to reach to every title
        $this->pagePath= $this->backendPath.'pages.';

    }
}

