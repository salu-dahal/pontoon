<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendController extends Controller
{

    public $frontendPath='frontend.';
    public $pagePath=' ';
//working of the constructor
    public function __construct(){

    $this->data('title', $this->title('welcome'));//to reach to every title
    $this->pagePath= $this->frontendPath. 'pages.';

}
}

