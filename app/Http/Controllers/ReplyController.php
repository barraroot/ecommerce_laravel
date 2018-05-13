<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReplyRequest;

class ReplyController extends Controller
{
    public function show($id)
    {
        $replies = \App\Reply::where('thread_id', $id)
                            ->with('user')
                            ->get();

        return $replies;
    }

    public function store(ReplyRequest $request)
    {
        $reply = new \App\Reply();
        $reply->body = $request->input('body');
        $reply->thread_id = $request->input('thread_id');
        $reply->user_id = \Auth::user()->id;
        $reply->save();

        return response()->json(['created' => 'success', 'data' => $reply]);
    }
}
