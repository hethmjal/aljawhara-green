<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {

        $messages = Message::latest()->get();
        return view('admin.dashboard.messages',['messages'=>$messages]);
    }

    public function show($id)
    {

        $message = Message::findOrFail($id);
        return view('admin.dashboard.show-message',['message'=>$message]);
    }
}