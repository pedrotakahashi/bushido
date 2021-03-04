<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function aulas(){
        return view('site.aulas.index');
    }

    public function contato(){
        return view('site.contato.index');
    }
    public function sobre(){
        return view('site.sobre.index');
    }
}
