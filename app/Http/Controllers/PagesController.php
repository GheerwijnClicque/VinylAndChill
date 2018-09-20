<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Make provider for this
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');        
    }

    public function contact() {
        return view('contact');        
    }

    /**
     * Show the application homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin() {
        // Get All Users
        $users = DB::select('select * from users');

        return view('admin', [
            'users' => $users
        ]);        
    }
}
