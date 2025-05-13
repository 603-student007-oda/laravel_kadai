<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $messages = \Auth::user()->messages()->orderBy('created_at','desc')->paginate(10);
        return view('home.index', ['messages' => $messages]);
    }
}
