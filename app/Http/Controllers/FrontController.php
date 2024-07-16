<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index()
    {
        return view('MBTI.user');
    }

    public function test()
    {
        return view('MBTI.pengisian');
    }

    public function tipe()
    {
        return view('MBTI.tipe');
    }
}
