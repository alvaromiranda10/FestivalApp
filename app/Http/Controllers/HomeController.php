<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $users = User::withSum('festivals','points')->orderBy('festivals_sum_points', 'DESC')->get();

        // dd($users);
        return view('home', compact('users'));
    }
    
    public function profile($id)
    {
        //get ranking of users according to their points
        $ranks = User::withSum('festivals','points')->orderBy('festivals_sum_points', 'DESC')->get();
        //get user by ID
        $user = $ranks->find($id);
        //get the user's position in the ranking
        $position = $ranks->where('id' ,$id)->keys()->first() + 1;

        $latestsFestivals = User::find($id)->festivals()->latest('pivot_created_at')->take(2)->get();

        // dd($latestsFestivals);
        return view('profile', compact('user', 'position', 'latestsFestivals'));
    }
    
    public function tours()
    {
        return view('dj/tours');
    }


}
