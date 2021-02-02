<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TestController extends Controller
{
    public function index()
    {
        return Redirect::back()->withErrors(['msg', 'The Hello World']);
    }
}
