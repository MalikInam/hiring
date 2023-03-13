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
                        <form method="post" action="{{url('profile_upload')}}" enctype="multipart/form-data">
                                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Information</h4>
                                <div class="row form-row">
                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Profile Image <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name <span class="text-danger">*</span></label>
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name <span class="text-danger">*</span></label>
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Whatsapp number <span class="text-danger">*</span></label>
                                            <input type="text" name="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Location <span class="text-danger">*</span></label>
                                            <input type="text" name="location" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control select" name="gender">
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Languages</label>
                                            <select class="form-control select" name="language">
                                                <option>Select</option>
                                                <option>English</option>
                                                <option>Urdu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Skill</label>
                                            <select class="form-control select" name="skill">
                                                <option>Select</option>
                                                <option>Web</option>
                                                <option>Wordpress</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Experience</label>
                                            <select class="form-control select" name="experirence">
                                                <option>Select</option>
                                                <option>one year</option>
                                                <option>Two Years</option>
                                            </select>
                                        </div>
</div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Education</label>
                                            <select class="form-control select" name="education">
                                                <option>Select</option>
                                                <option>Matric</option>
                                                <option>Guraduation</option>
                                                <option>Master</option>
                                                <option>PHD</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="birth">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section submit-btn-bottom">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
                        </div>
</from>
                    
                        
                   
                     
                     
                        
                        
                        
                    </div>
                </div>

            </div>

        </div>		
        
       
    </div>
			@endsection