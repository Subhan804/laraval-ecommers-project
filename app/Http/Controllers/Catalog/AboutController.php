<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('catalog.about');
    }
}