<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function aboutus()
    {
        return '안녕하세요 abouus입니다.';
    }

    public function copyright()
    {
        return '안녕하세요 copyright입니다.';
    }

    public function location()
    {
        return '안녕하세요 location입니다';
    }

}
