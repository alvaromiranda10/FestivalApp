<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
    
    public function profile()
    {
        return view('profile');
    }
    
    public function tours()
    {
        return view('dj/tours');
    }


}
