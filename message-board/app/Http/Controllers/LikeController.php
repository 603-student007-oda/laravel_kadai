<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    //いいね登録
    public function store(Request $request)
    {
        \Auth::user()->likeMessages()->attach($request->message_id);
        return back();
    }

    //いいね解除
    public function destroy(Request $request)
    {
        \Auth::user()->likeMessages()->detach($request->message_id);
        return back();
    }

    //いいね一覧
    public function index()
    {
        $books = \Auth::user()->likeMessages()->orderBy('created_at', 'desc')->paginate(20);
        return view('likes.index', ['Messages' => $messages]);
    }
}
