<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\UserCreated;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
        // \App\Jobs\SendReports::dispatch();

        event(new \App\Events\BecameHappy("Mohamed", "he married"));

        return view('page');
    }
}
