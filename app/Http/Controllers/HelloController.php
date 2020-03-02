<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{

    public function list()
    {
        $data = [
            'records' => Book::all()
        ];
        return view('hello.list', $data);
    }

    public function foreach_loop()
    {
        return view('hello.foreach_loop', [
            'weeks' => ['月', '火', '水', '木', '金', '土', '日']
        ]);
    }

    public function index(Request $request)
    {
        return view('hello.index', ['msg' => 'フォームを入力ください。']);
    }

    public function post(HelloRequest $request)
    {
        return view('hello.index', ['msg' => '正しく入力されました。！']);
    }
}
