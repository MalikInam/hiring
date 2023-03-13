@extends('seller_buyer.layouts.master')
@section('content')


        
        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Profile Settings</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->
        
        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                 
                    <div class="col-md-7 col-lg-8 col-xl-9">
                    
                        <!-- Basic Information -->
                        <form method="post" action="{{url('save_review')}}">
                                        @csrf
                                       

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Send Reviewa</h4>
                                <div class="row form-row">
                                <?php


use App\Models\User;
$b = User::whereuser_type('Seller')->get();
?>
                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Seller Name</label>
                                            <select class="form-control select" name="seller_id">
                                                <option>Select</option>
                                                @foreach($b as $b)
                                                <option value="{{$b->id}}">{{$b->name}}</option>

                                            @endforeach
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <?php

use App\Models\Project;
use Illuminate\Support\Facades\Auth;
$userID = Auth::user()->id;
$b = Project::whereposted_by($userID)->get();
?>
                            <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Seller Assign Project Name</label>
                                            <select class="form-control select" name="project_id">
                                                <option>Select</option>
                                                @foreach($b as $b)
                                                <option value="{{$b->id}}">{{$b->name}}</option>

                                            @endforeach
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Revies</label>
                                            <input type="text" name="review" class="form-control">
                                        </div>
                                    </div>
                
                       
                                </div>
                                
                            </div>
                  
                            <input type="hidden" name="accept_status" value="0">
                            <div class="submit-section submit-btn-bottom">
                            <button type="submit" class="btn btn-primary submit-btn">Send Review</button>
                        </div>
                        </div>
</from>
                    
                        
                   
                     
                     
                        
                        
                        
                    </div>
                </div>

            </div>

        </div>		
        
       
    </div>
			@endsection