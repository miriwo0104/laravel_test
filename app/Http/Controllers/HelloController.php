<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        $date = ['msg_1'=>'これはコントローラから渡されたメッセージです。', 'msg_2'=>'これはコントローラから渡されたメッセージです。No2'];
        return view('hello.index', $date);
    }
}