<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteRootController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
