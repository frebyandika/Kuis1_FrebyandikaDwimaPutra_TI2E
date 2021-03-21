<?php

namespace App\Http\Controllers;

use Illuminat\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function innerpage(){
        return view('inner-page');
    }

    public function portofoliodetails(){
        return view('portofolio-details');
    }

    public function header(){
        return view('header');
    }

    public function footer(){
        return view('footer');
    }
}