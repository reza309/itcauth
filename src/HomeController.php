<?php

namespace ITC\Itcauth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function login($data)
    {
        echo($data);
        return view("itcauth::login");
    }
}
