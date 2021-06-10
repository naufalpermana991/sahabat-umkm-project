<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.event');
    }
    public function detailevent(Request $request)
    {
        return view('pages.detailevent');
    }
    public function checkoutevent(Request $request)
    {
        return view('pages.checkout');
    }
    public function success(Request $request)
    {
        return view('pages.success');
    }
}
