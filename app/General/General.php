<?php
namespace App\General;
use Illuminate\Support\Facades\Config;

trait General{
    public $data= [];

    public function data($key,$value=null){
        return $this->data[$key]= $value;
    }
    //for the dynamic title
    public function title($backend,$separator= ': :',$frontend=null){
        if(isset($frontend)){

            $frontend= Config::get( 'title.name');
        }
        $backend = ucfirst($backend);
        return $frontend. $separator.$backend;
    }
}

