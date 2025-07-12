<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapTemplateController extends Controller
{
    public function index()
    {
        $title = "Personal - Start Bootstrap Theme";
        return view('home', compact('title'));
    }

    public function resume()
    {
        $title = "Personal - Start Bootstrap Resume";
        return view('resume', compact('title'));
    }

    public function projects()
    {
        $title = "Personal - Start Bootstrap Projects";
        return view('projects', compact('title'));
    }

    public function contact()
    {
        $title = "Personal - Start Bootstrap Contact";
        return view('contact', compact('title'));
    }
}
