<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function send()
    {
        Mail::send(['text' => 'mail'], ['name', 'test blog'], function ($message){
            $message->to('jepone1997@gmail.com', 'to web dev blog')->subject('test email');
            $message->from('jepone1997@gmail.com', 'to web dev blog');
    });
    }
}
