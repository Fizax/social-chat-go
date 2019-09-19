<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;

class chatController extends Controller
{
    //
    public function send(){
        //$chat = \DB::('SELECT * FROM products');
    }
    public function index()
    {
        return view('chat/index');
    }

    public function create()
    {
        //
        return view('chat/create');
    }


    public function store(Request $request)
    {
        $user = auth()->user();
        $userId = $user->id;

        \DB::table('chats')
            ->insert([
                'text' => $request->chattext,
                'userIdFrom' => $userId,
                //'tijd' => date("h:i:sa"),
                'date' =>  date("Y-m-d h:i:sa"),
                'userIdTo' => 1
            ]);
        return redirect()->route('chat.create');

    }
}


