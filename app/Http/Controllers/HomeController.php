<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\User;
use App\Models\Project;
use App\Models\Message;
use App\Models\Proposal;
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
        return view('home');
    }
    public function profile()
    {
        $profile = User::all();
        return view('admin.profile',compact('profile'));
        
    }
    public function message()
    {
        $message = Message::all();
        return view('admin.message',compact('message'));
    }
    public function main()
    {
        return view('frontend');
    }
    
    public function total()
    {
        $total_project = Proposal::count();
        return view('admin.dashboard',compact('total_project'));
        
    }
}
