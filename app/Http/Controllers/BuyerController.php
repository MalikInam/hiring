<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use Illuminate\Http\Request;
use App\Models\Buyer;
use App\Models\Project;
use App\Models\Proposal;
use App\Models\Review;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class BuyerController extends Controller
{
   
    public function buyer_dashboard()
    {
        $userID = Auth::user()->id;
        $profile = Seller::whereuser_id($userID)->first();
        return view('seller_buyer.buyer_dashboard',compact('profile'));
    }
    public function create()
    {
       
        return view('seller_buyer.buyer.project');
    }
    public function store()
    {
       
        $userID = Auth::user()->id;
        $profile = Seller::whereuser_id($userID)->first();
        return view('seller_buyer.seller_dashboard',compact('profile'));
    }
    public function buyer_store(Request $request)
    {
        $userID = Auth::user()->id;
        $project =new Project();
        $project->posted_by = $userID;
        $project->name=$request->name;
        $project->location=$request->location;
        $project->title=$request->title;
        $project->description =$request->description;
        $project->date=$request->date;
        $project->price=$request->price;
        $project->assign_status=$request->assign_status;
        $project->save();
        return redirect('buyer_dashboard');
    }

    public function show_proposal()
    {
        $userID = Auth::user()->id;
        $proposal = Proposal::all();
        return view('seller_buyer.buyer.view_proposal',compact('proposal'));
    }
    public function show_project()
    {
        $project = Project::all();
        return view('seller_buyer.buyer.view_project',compact('project'));
    }
    public function status($id)
    {
        $booking = Proposal::find($id);
        return view('seller_buyer.buyer.status',compact('booking'));
    }

    public function chanagestatus(Request $request)
    {
        $id = $request->id;
        $booking = Proposal::find($id);
        $booking->accept_status = $request->accept_status;
        $booking->save();
        return redirect('show_proposal');
    }
    public function destroy($id)
    {
        $category =Proposal::find($id);
        $category->delete();
        return redirect('show_proposal')->with('deleted','Request Cancel Successfully');
    }
    public function statusch($id)
    {
        $booking = Project::find($id);
        return view('seller_buyer.buyer.status_change',compact('booking'));
    }
    public function chanagesstatus(Request $request)
    {
        $id = $request->id;
        $booking = Project::find($id);
        $booking->assign_status = $request->assign_status;
        $booking->save();
        return redirect('show_project');
    }
    public function Delete($id)
    {
        $category =Project::find($id);
        $category->delete();
        return redirect('show_project')->with('deleted','Project Deleted     Successfully');
    }
    public function review()
    {
        return view('seller_buyer.buyer.review');
    }
    public function review_store(Request $request)
    {
        $userID = Auth::user()->id;
        $project =new Review();
        $project->posted_by = $userID;
        $project->seller_id=$request->seller_id;
        $project->project_id=$request->project_id;
        $project->review=$request->review;
        $project->save();
        return redirect('buyer_dashboard')->with('view','Project Deleted  Successfully');
    }
    public function seller_profile($id)
    {
        $p =Seller::find($id);
        return view('seller_buyer.buyer.view_profile',compact('p'));
    }

   
}
