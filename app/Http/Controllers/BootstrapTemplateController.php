<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BootstrapTemplateController extends Controller
{
    public function index()
    {
        $title = "Personal - Start Bootstrap Theme";
        return view('layout.app', compact('title'));
    }
}
