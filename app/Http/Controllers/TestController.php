<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function hussein()
    {
        return view('index');
    }

    public function printName($name = 'DefaultName')
    {
        dd("Hello $name from printName function");
    }
}
