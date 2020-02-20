<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }

    public function list()
    {
        $data = [
            'recodes' => Book::all()
        ];
        return view('hello.list',$data);
    }
    
    public function foreach_loop()
    {
   
        return view('hello.foreach_loop',[
            'weeks' => ['月','火','水','木','金','土','日']
        ]);
    }


}
