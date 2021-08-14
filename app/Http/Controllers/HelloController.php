<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    public function index(Request $request,Response $response)
    {
        $msg = 'please input text:';
        $keys = [];
        $values = [];
        if ($request->isMethod('post')) {
            $form = $request->all();
            $keys = array_keys($form);
            //dd($keys);//要素の属性が出力される
            $values = array_values($form);
            //dd($values);//要素の内容が出力される
        }
        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        return view('hello.index', $data);
    }

    /* 要素の属性、内容の出力
    public function index(Request $request,Response $response)
    {
        $msg = 'please input text:';
        $keys = [];
        $values = [];
        if ($request->isMethod('post')) {
            $form = $request->all();
            $keys = array_keys($form);
            //dd($keys);//要素の属性が出力される
            $values = array_values($form);
            //dd($values);//要素の内容が出力される
        }
        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        return view('hello.index', $data);
    }
    */

    /* 複数要素のインプット
    public function index(Request $request)
    {
        $msg = 'please input text:';
        $keys = [];
        $values = [];
        if ($request->isMethod('post')) {
            $form = $request->all();
            $keys = array_keys($form);
            //dd($keys);//要素の属性が出力される
            $values = array_values($form);
            //dd($values);//要素の内容が出力される
        }
        $data = [
            'msg' => $msg,
            'keys' => $keys,
            'values' => $values,
        ];
        return view('hello.index', $data);
    }
    */

    /* Storage link
    private $fname;

    function __construct()
    {
        $this->fname = 'hello.txt';
    }

    public function index()
    {
        $sample_msg = Storage::disk('public')->url('hello.txt');
        $sample_data = Storage::disk('public')->get('hello.txt');
        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL,$sample_data),
        ];
        return view('hello.index', $data);
    }

    public function other($msg)
    {
        Storage::disk('public')->prepend($this->fname,$msg);
        return redirect()->route('hello');
    }
    */

    //configの実験
    // public function other(Request $request)
    // {
    //     $data = [
    //         'msg'=>$request->bye,
    //     ];
    //     return view('hello.index', $data);
    // }/ function __construct()
    // {
    //     config(['sample.message' => '新しいメッセージ !']);
    // }

    // public function index()
    // {
    //     $sample_msg = env('sample.message');
    //     $sample_data = config('sample.data');
    //     $data = [
    //         'msg' => $sample_msg,
    //         'data' => $sample_data,
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function other(Request $request)
    // {
    //     return redirect()->route('sample');
    // }

    // public function other(Request $request)
    // {
    //     $data = [
    //         'msg'=>$request->bye,
    //     ];
    //     return view('hello.index', $data);
    // }

    // function __construct()
    // {
    //     config(['sample.message' => '新しいメッセージ !']);
    // }

    // public function index()
    // {
    //     $sample_msg = env('sample.message');
    //     $sample_data = config('sample.data');
    //     $data = [
    //         'msg' => $sample_msg,
    //         'data' => $sample_data,
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function other(Request $request)
    // {
    //     return redirect()->route('sample');
    // }

    // public function other(Request $request)
    // {
    //     $data = [
    //         'msg'=>$request->bye,
    //     ];
    //     return view('hello.index', $data);
    // }

    /* モデルをルートパラメータにすることによるid取得
    public function index(Person $person)
    {
        $data = [
            'msg'=>$person,
        ];
        return view('hello.index', $data);
    }
    */

    /*
    public function index(Request $request)
    {
        $data = [
            'msg'=>$request->hello,
        ];

        return view('hello.index', $data);
    }
    */

    /*
    public function other(Request $request)
    {
        $data = [
            'msg'=>$request->bye,
        ];
        return view('hello.index', $data);
    }
    */
}