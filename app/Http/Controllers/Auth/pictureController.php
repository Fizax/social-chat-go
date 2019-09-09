<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class pictureController extends Controller
{
    function index()
    {
        return view('/account/picture');
    }

    protected function validator($request)
    {
        return Validator::make($request, [
            'image' => ['required',
                        'image',
                        'mimes:jpeg, png, jpg',
                        'max:2048'],
        ]);
    }

    protected function upload($request)
    {
        $image = $request->file('image');
        $image->move(public_path())
    }

//    function upload(Request $request)
//    {
//        $this->validate($request,
//            'image' =>[]);
//    }
}
