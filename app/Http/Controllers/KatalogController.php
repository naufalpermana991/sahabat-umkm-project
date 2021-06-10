<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.katalog');
    }
    public function detailkatalog(Request $request)
    {
        return view('pages.detailkatalog');
    }
}
