<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitingController extends Controller
{
    public function index()
    {
        return view('recruiting');
    }
}
