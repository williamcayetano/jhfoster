<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index');
    }

    public function products() {
        return view('products');
    }

    public function services() {
        return view('services');
    }

    public function training() {
        return view('training');
    }

    public function story() {
        return view('story');
    }

    public function contact() {
        return view('contact');
    }

    public function privacy() {
        return view('privacy');
    }

    public function conflict() {
        return view('conflict');
    }
}