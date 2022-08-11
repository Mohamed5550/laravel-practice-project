<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UserCreated;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
        return view("welcome");
    }
}
