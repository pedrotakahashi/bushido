<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerSite extends Controller
{
    public function PageIndex(){
        return view("Site.index");
    }

    public function PageLogin(){
        return view("Site.login");
    }
}
