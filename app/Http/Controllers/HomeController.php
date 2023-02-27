<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::with(['department','designation'])->orderBy('users.id','desc')->get();

        return view('home',['users'=>$user]);
    }
}
