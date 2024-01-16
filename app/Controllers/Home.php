<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function restaurantes(): string
    {
        return view('restaurantes');
    }
    public function hoteles(): string
    {
        return view('hoteles');
    }
    public function lugares(): string
    {
        return view('lugares');
    }
}
