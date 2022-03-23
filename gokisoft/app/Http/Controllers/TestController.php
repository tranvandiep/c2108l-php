<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hello(Request $request)
    {
        echo 'Xin Chao';
    }

    public function showMsg(Request $request, $msg)
    {
        echo $msg;
    }

    public function showView(Request $request)
    {
        return view('test', [
            'a' => 'Test data pass',
            'msg' => 'OKOK',
            'html' => '<h1>Xin Chao</h1>',
            'arr' => [
                'fullname' => 'Tran Van A',
                'address' => 'Ha Noi'
            ],
            'subjectList' => ['Lap Trinh C', 'HTML/CSS/JS', 'SQL Server', 'PHP/Laravel']
        ]);
    }
}
