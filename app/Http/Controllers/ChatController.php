<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Chat;

class ChatController extends Controller
{

    public function store(Request $request){

        // dd($request->all());
        // dd(Auth()->user());
        Chat::create([
            'pesan' => $request->text,
            'name' => auth()->user()->name,
            'user_id' => auth()->user()->id,
        ]);

        // return response()->json(['success'=>'Laravel ajax example is being processed.']);

        return redirect()->back();

    }

    public function get_chat(){


        $data = Chat::all();

        return $data;


    }

}
