<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index(){


        return view('welcome1');
    }
    public function login(){


        return view('login');
    }
}
