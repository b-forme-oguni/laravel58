<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

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
        return view('hello.index', ['msg' => 'フォームを入力：']);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
        $this->validate($request, $validate_rule);
        return view('hello.index', ['msg' => '正しく入力されました。！']);
    }
}
