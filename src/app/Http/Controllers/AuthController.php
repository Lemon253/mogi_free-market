<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail; // Mailファサード

class AuthController extends Controller
{
    //ログイン画面の表示
    public function login()
    {
        return view('auth.login');
    }

    //メールの送信処理
    public function sendTestEmail()
    {
        //Mailtrapを使用してテストメールを送信する
        $recipientEmail = 'test-recipient@example.com';

        // 1. Mailファサードを使ってメールを送信
        Mail::to($recipientEmail)->send(new TestMail());

        // または、非同期で処理する場合 (Queue workerが稼働している必要あり)
        // Mail::to($recipientEmail)->queue(new TestMail()); 

        //メール送信後に表示する画面とメールの内容
        return view('auth.confirm', [
            'recipient' => $recipientEmail
        ])->with('status', 'テストメールを送信しました。MailtrapのInboxを確認してください。');
    }

}
