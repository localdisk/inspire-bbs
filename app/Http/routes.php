<?php

Route::get('/', function () {
    $hour = Carbon\Carbon::now()->hour;

    $greeting = null;
    if (4 <= $hour && $hour < 10) {
        $greeting = "お早うございます";
    } elseif (10 <= $hour && $hour < 17) {
        $greeting = "こんにちは";
    } else {
        $greeting = "こんばんわ";
    }

    return view('index', compact('greeting'));
});
