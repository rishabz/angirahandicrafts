<?php
namespace App\helpers;
use DB;
use Str;
use URL;

class CommonClass{
    static public function getDashbordUrl(){
        return URL::to('/');
    } 
}
?>