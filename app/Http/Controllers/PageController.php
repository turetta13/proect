<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function acc()
    {
        return view('account');
    }

    public function check()
    {
        return view('checkout');
    }

    public function contact()
    {
        return view('contact');
    }

    public function prod()
    {
        $products = [
            ['name' => 'Торт "Наполеон"', 'price' => 320],
            ['name' => 'Торт "Мишка"', 'price' => 150],
            ['name' => 'Торт "Монастырская изба"', 'price' => 350]
        ];
        return view('products', ['items' => $products]);
    }

    public function single()
    {
        return view('single');
    }

    public function info ()
    {
        return "мобильный телефон - +380938017387". '<br>';
    }


}