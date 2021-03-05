<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $call = $request['call'];
    return new Response(
        "جواب از وبسرویس",
        200,
        ['Content-Type' => 'text/plain']
    );
});
