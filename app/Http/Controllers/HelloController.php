<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index() {
        return <<<EOF
        <html>
        <body>
        <p>これはHelloコントローラのIndexアクションです</p>
        </body>
        </html>
        EOF;
    }

    public function other() {
        return <<<EOF
        <html>
        <body>
        <p>これはHelloコントローラのOhterアクションです</p>
        </body>
        </html>
        EOF;
    }
}