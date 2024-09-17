<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        

        $member = Member::count();

        return view('home', ['member'=>$member]);
    }
}
