<?php

namespace App\Http\Controllers;
use App\Models\Seller;
use App\Models\User;
use App\Models\Project;
use App\Models\Message;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class SellerController extends Controller
{
    public function seller_profile()
    {

        return view('seller_buyer.seller.seller_profile');
    }
    public function dashboard()
    {
        $userID = Auth::user()->id;
        $profile = Seller::whereuser_id($userID)->first();
        return view('seller_buyer.seller_dashboard',compact('profile'));
    }
    public function profile()
    {
        $userID = Auth::user()->id;
        $profile = Seller::whereuser_id($userID)->first();
        return view('seller_buyer.seller.view_profile',compact('profile'));
    }
    public function profile_store(Request $request)
    {
        $userID = Auth::user()->id;
        $profile =new Seller();
        if($request->hasFile('image'))
        {
            $image = $request->image;
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uplaod');
            $image->move($destinationPath, $name);
            $profile->image = $name;
        }
        $profile->user_id = $userID;
        $profile->first_name =$request->first_name;
        $profile->last_name =$request->last_name;
        $profile->number =$request->number;
        $profile->location =$request->location;
        $profile->description =$request->description;
        $profile->language=$request->language;
        $profile->skill=$request->skill;
        $profile->experirence =$request->experirence;
        $profile->education =$request->education;
        $profile->gender =$request->gender;
        $profile->birth =$request->birth;
        $profile->save();
        return redirect('/home')->with('message','Profile Saved Successfully Please Confirm are you seller or buyer');
    }
    public function logout(){
        auth()->logout();
        return redirect('/');
    }
  
    public function project(){
        $project = Project::whereassign_status('0')->get();
        return view('seller_buyer.seller.view_project',compact('project'));
    }
    public function proposal(){
        return view('seller_buyer.seller.send_proposal');
    }
    public function proposal_store(Request $request){
        $userID = Auth::user()->id;
        $project =new Proposal();
        $project->user_id = $userID;
        $project->project_id =$request->project_id;
        $project->buyer_id =$request->buyer_id;
        $project->name =$request->name;
        $project->location =$request->location;
        $project->number =$request->number;
        $project->description =$request->description;
        $project->date=$request->date;
        $project->price=$request->price;
        $project->accept_status=$request->accept_status;
        $project->save();
        return redirect('seller_dashboard')->with('message','Proposal send  Successfully');
    }
    public function contact()
    {
        return view('contact');
    }
    public function message_store(Request $request){
       
        $project =new Message();
        $project->name =$request->name;
        $project->mail=$request->mail;
        $project->subject=$request->subject;
        $project->message=$request->message;
        $project->save();
        return redirect('contact')->with('message','Message Send Successfully');
    }
    public function buer_review(){
       
       
        return view('seller_buyer.seller.view_review');
    }
    
}
