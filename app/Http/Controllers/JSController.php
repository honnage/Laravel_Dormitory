<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JSController extends Controller
{
    public function index()
    {
        return view('testjs.test1');
    }

}
