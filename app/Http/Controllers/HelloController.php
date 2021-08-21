<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(Request $request)
    {
        $param1 = $request->get('param1');

        return view('welcome');
    }
}
