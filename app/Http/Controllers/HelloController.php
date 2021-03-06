<?php

namespace App\Http\Controllers;

use App\Book;
use App\Person;
use Hamcrest\Type\IsNumeric;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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
        $user = Auth::user();
        $sort = $request->sort;
        // $items = DB::table('people')->simplePaginate(3)->orderBy('age', 'asc');
        $items = Person::orderBy($sort, 'asc')->simplePaginate(3);
        return view('hello.index', compact('user', 'items', 'sort'));
    }

    public function post(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request)
    {
        if (!is_numeric($request->id)) {
            return view('route.error');
        }
        $param = ['id' => $request->id];
        $item = DB::select('select * from people where id = :id', $param);
        if (!$item) {
            return view('route.error');
        }
        return view('hello.edit', ['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
        return redirect('/hello');
    }

    public function del(Request $request)
    {
        $item = DB::table('people')
            ->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request)
    {
        DB::table('people')
            ->where('id', $request->id)->delete();
        return redirect('/hello');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return void
     */
    public function show(Request $request)
    {
        $page = $request->page;
        $recode = $request->recode;
        $items = DB::table('people')
            ->offset($page * $recode)
            ->limit($recode)
            ->get();
        return view('hello.show', ['items' => $items]);
    }

    public function rest(Request $request)
    {
        return view('hello.rest');
    }

    public function ses_get(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }

    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }

    public function getAuth(Request $request)
    {
        $param = ['message' => 'ログインして下さい。'];
        return view('hello.auth', $param);
    }

    public function postAuth(Request $request)
    {
        $email = $request ->email;
        $password = $request ->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // $msg = 'ログインしました。（' . Auth::user() ->name . '）';
            return redirect('hello');
        } else {
            $msg = 'ログインに失敗しました。';
        }
        return view('hello.auth', ['message'=>$msg]);
    }
}
