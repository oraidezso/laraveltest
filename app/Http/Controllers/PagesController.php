<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function admin(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('pages.admin');
    }
    public function tsz(Request $request)
    {
        $request->user()->authorizeRoles(['tsz']);
        return view('pages.tsz');
    }
    public function bf(Request $request)
    {
        $request->user()->authorizeRoles(['bf']);
        return view('pages.bf');
    }
}
