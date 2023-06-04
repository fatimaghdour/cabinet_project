<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('layouts.dash');
            }
            else
            {
                return view('layouts.dash');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    
    
}
