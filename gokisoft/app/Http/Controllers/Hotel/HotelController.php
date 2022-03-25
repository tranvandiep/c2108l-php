<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HotelController extends Controller
{
    public function showAll(Request $request)
    {
        // $hotelList = [];
        // for ($i=0; $i < 20; $i++) { 
        //     $hotelList[] = [
        //         'room_no' => 'R00'.$i,
        //         'type' => 'Normal',
        //         'floor' => $i,
        //         'price' => 1000 + 1000*$i
        //     ];
        // }
        // $hotelList = DB::table('hotel')->get();
        $hotelList = DB::table('hotel')->paginate(5);

        $index = 0;
        if(isset($request->page)) {
            $index = ($request->page - 1) * 5;
        }

        return view('hotel.index', [
            'hotelList' => $hotelList,
            'index' => $index
        ]);
    }

    public function showDetail(Request $request)
    {
        $id = $request->id;

        return view('hotel.view', [
            'room_no' => 'R00'.$id,
            'type' => 'Normal',
            'floor' => $id,
            'price' => 1000 + 1000*$id
        ]);
    }
}
