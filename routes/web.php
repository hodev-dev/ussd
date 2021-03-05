<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $mobile = $request['mobile'];
    $call = $request['call'];
    $sessionid = $request['sessionid'];
    return new Response((string)$call, 200, ['Content-Type' => 'text/plain']);
});
