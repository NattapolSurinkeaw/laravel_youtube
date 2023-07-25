<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $address = "427 หมู่ที่ 4 บ้านโคกสูง";
        $city = "ชุมแพ";
        $provice = "ขอนแก่น";



        return view('pages.home',compact('address', 'city', 'provice'));
    }
}
