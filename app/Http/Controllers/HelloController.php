<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HelloController extends Controller
{
    //Storageの実験
    private $fname;

    function __construct()
    {
        $this->fname = 'sample.txt';
    }

    public function index()
    {
        $sample_msg = $this->fname;
        $sample_data = Storage::get($this->fname);
        $data = [
            'msg' => $sample_msg,
            'data' => explode(PHP_EOL,$sample_data),
        ];
        return view('hello.index', $data);
    }

    public function other($msg)
    {
        $data = Storage::get($this->fname) . PHP_EOL . $msg;
        Storage::put($this->fname,$data);
        return redirect()->route('hello');
    }

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