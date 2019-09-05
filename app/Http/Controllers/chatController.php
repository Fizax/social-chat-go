<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chatController extends Controller
{
    //
    public function send(){
        //$chat = \DB::('SELECT * FROM products');
    }

    public function create()
    {
        //
        return view('chat/create');
    }


    public function store(Request $request)
    {
        \DB::table('chat')
            ->insert([
                'text' => $request->chattext
            ]);
        return redirect()->route('chat.create');

    }
}


