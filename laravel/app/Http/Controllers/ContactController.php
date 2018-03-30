<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
	//显示表单
    public function showForm(){
    	return view('emails.emailform');
    }

    //接收表单信息
    public function sendContactInfo(ContactRequest $request){
    	// dd($request);
       $data=$request->only('username','address','phone');
       // dd($data);
       $data['msg']=explode('\n',$request->get('msg'));
       Mail::send('emails.test',$data,function($message) use ($data){
       	$message->subject('测试'.$data['username'])->to('a3492585@163.com')->replyTo($data['address']);
       });

       return back()->withSuccess("thanks for your message.It has been sent");

    }
}
