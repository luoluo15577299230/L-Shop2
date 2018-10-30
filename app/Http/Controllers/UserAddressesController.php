<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
	// 把当前用户下的所有地址作为变量 $addresses 注入到模板的 user_addresses.index 中渲染
    public function index(Request $request) {
    	return view('user_addresses.index', [
    		'addresses' => $request->user()->addresses,
    	]);
    }
}
