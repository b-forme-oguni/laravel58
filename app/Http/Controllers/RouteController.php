<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function param(int $id){
        return 'id値：'.$id;
    }
    public function search($id){
        return '可変長の値：'.$id;
    }
    public function info(){
        return 'info';
    }
    public function article(){
        return 'article';
    }
    // public function ns(){
    //     return 'ns';
    // }
}
