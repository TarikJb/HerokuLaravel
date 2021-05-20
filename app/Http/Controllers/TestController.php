<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // Function
    public function index(){
        $var4 = "using from Controller";
        return view("pages/hello",compact("var4"));
    }
}
