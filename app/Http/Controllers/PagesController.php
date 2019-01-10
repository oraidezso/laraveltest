<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('pages.admin');
    }
    public function tsz(Request $request)
    {
        $request->user()->authorizeRoles(['admin','tsz']);
        return view('pages.tsz');
    }
    public function bf(Request $request)
    {
        $request->user()->authorizeRoles(['admin','bf']);
        return view('pages.bf');
    }
}
