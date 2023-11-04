<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
       }

    public function about() {
    return view('about');
    }

    public function contact() {
    return view('contact');
    }

    public function menu()
    {
        return view('menu');
    }

    public function chef()
    {
        return view('chef');
    }

    public function acara()
    {
        return view('acara');
    }

    public function reservasi()
    {
        return view('reservasi');
    }
       
}
