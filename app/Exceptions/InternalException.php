<?php

namespace App\Exceptions;

use Exception;

use Illuminate\Http\Request;

class InternalException extends Exception
{
    protected $msgForUser;

    Pblic function __construct(string $message, string $msgForUser = '系统内部错误', int $code = 500) {
    	parent::__construct($message, $code);
    	$this->msgForUser = $msgForUser;
    }

    public function render(Request $request) {
    	// 如果是 AJAX 请求，则返回 JSON 格式的数据，否则返回一个错误的页面
    	if ($request->expectsJson()) {
    		return response()->json(['msg' => $this->msgForUser], $this->code);
    	}
    	return view('pages.error', ['msg' => $this->msgForUser]);
    }
}
