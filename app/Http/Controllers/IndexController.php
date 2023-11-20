<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function projects()
    {
        return view('projects');
    }
    public function apparel()
    {
        return view('websites.apparel-ideas');
    }
    public function kaizen()
    {
        return view('websites.kaizen');
    }

    public function capstone()
    {
        return view('capstone');
    }
    public function macasadia()
    {
        return view('mdrrmc.macasadia');
    }
    public function contact()
    {
        return view('contact');
    }
}
