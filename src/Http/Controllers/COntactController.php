<?php

namespace Bitfumes\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class COntactController extends Controller
{
    public function index(){
        return view('contact::contact');
    }
}
