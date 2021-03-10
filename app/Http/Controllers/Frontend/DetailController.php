<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        return view('frontend.detail');
    }

    public function watch() {
        return view('frontend.watch');
    }
}
