<?php
use ITC\Itcauth\HomeController;
Route::get('itcauth',function(){
    echo("Hello from itc authentication");
});
Route::get("login/{data}/",[Homecontroller::class,'login']);