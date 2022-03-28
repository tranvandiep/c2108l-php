<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

    public function dump(Request $request)
    {
        $dataList = DB::table('hotel')
            ->join('rooms', 'rooms.hotel_id', '=', 'hotel.id') //leftJoin
            ->select('hotel.id', 'hotel.room_no as hotel_name', 'rooms.room_no as room_no', 'rooms.floor')
            ->get();
        foreach($dataList as $item) {
            echo $item->id.'-'.$item->hotel_name.'-'.$item->room_no.'-'.$item->floor.'<br/>';
        }
    }
}
