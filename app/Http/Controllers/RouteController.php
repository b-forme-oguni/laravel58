<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function param(int $id){
        return 'id値：'.$id;
    }
    public function search($id){
        return 'id値：'.$id;
    }
}
